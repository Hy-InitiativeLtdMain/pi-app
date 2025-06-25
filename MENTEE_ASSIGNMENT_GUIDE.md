# Mentee Assignment System

This document explains the automated mentee assignment system that assigns mentees to mentors from the **3mtt institute** based on their track.

## Overview

The system automatically assigns up to 10 mentees to each mentor from the 3mtt institute based on:
- **Institute restriction**: Only mentors and mentees from "3mtt" institute are eligible
- **Track matching**: Mentees and mentors must have the same track
- **Availability**: Only unassigned mentees are considered
- **Capacity**: Mentors cannot have more than 10 mentees

## Key Features

### 1. Automatic Assignment on Mentor Creation
When a new mentor profile is created with institute "3mtt", the system automatically attempts to assign up to 10 mentees from the same institute.

### 2. Daily Automated Task
The system runs a daily automated task at 2:00 AM to assign mentees to 3mtt mentors who have available slots.

### 3. Manual Assignment
Administrators can manually trigger mentee assignments for specific 3mtt mentors or all eligible 3mtt mentors.

### 4. Capacity Checking
The system prevents mentors from exceeding the 10-mentee limit.

## API Endpoints

### Admin Routes (requires admin access)

#### Get 3mtt Mentors Needing Assignments
```
GET /api/v1/user/admin/mentors/needing-assignments
```
Returns a list of 3mtt mentors who can accept more mentees.

#### Run Automated Assignment for 3mtt Institute
```
POST /api/v1/user/admin/mentors/run-automated-assignment
```
Triggers automated mentee assignment for all eligible 3mtt mentors.

#### Manually Assign to Specific 3mtt Mentor
```
POST /api/v1/user/admin/mentors/{mentor_id}/assign-mentees
```
Assigns mentees to a specific 3mtt mentor.

#### Check Mentor Capacity
```
GET /api/v1/user/admin/mentors/{mentor_id}/capacity
```
Returns the current mentee count and capacity information for a mentor.

## Artisan Commands

### Automated Assignment Command
```bash
# Run automated assignment for all eligible 3mtt mentors
php artisan mentors:assign-mentees

# Run for a specific 3mtt mentor
php artisan mentors:assign-mentees --mentor-id=123

# Dry run (show what would be done without making changes)
php artisan mentors:assign-mentees --dry-run

# Dry run for specific 3mtt mentor
php artisan mentors:assign-mentees --mentor-id=123 --dry-run
```

### Scheduled Task
The command is automatically scheduled to run daily at 2:00 AM.

## Assignment Logic

1. **Filter Eligible Mentors**: Only approved 3mtt mentors with a track specified
2. **Check Capacity**: Ensure mentor has less than 10 mentees
3. **Find Available Mentees**: Look for 3mtt mentees with matching track
4. **Avoid Duplicates**: Ensure mentees are not already assigned to any mentor
5. **Random Selection**: Assign mentees randomly from the available pool
6. **Fill Slots**: Continue until mentor has 10 mentees or no more mentees are available

## Response Format

### Assignment Result
```json
{
    "assigned": 5,
    "message": "Assigned 5 new mentees to mentor",
    "total_mentees": 8,
    "remaining_slots": 2
}
```

### Capacity Check
```json
{
    "mentor_id": 123,
    "current_mentees": 8,
    "max_mentees": 10,
    "remaining_slots": 2,
    "can_accept_more": true,
    "is_full": false
}
```

## Error Handling

- **Mentor not found**: Returns 404 error
- **Mentor not from 3mtt**: Returns 400 error with institute restriction message
- **Mentor at capacity**: Returns 400 error with current mentee count
- **No track specified**: Returns error message
- **No available mentees**: Returns success with 0 assignments

## Logging

All mentee assignments are logged with detailed information including:
- Mentor ID and name
- Institute verification (3mtt)
- Number of mentees assigned
- Assignment results
- Timestamp

## Best Practices

1. **Monitor Capacity**: Regularly check 3mtt mentor capacity to ensure optimal distribution
2. **Review Assignments**: Use dry-run mode to preview assignments before execution
3. **Manual Override**: Use manual assignment for special cases or corrections
4. **Track Performance**: Monitor assignment success rates and adjust logic if needed

## Troubleshooting

### Common Issues

1. **No mentees assigned**: Check if 3mtt mentees exist with matching track
2. **Mentor not receiving assignments**: Verify mentor status is 'approved', track is set, and institute is "3mtt"
3. **Duplicate assignments**: System prevents this automatically, but check logs if issues arise
4. **Wrong institute**: Ensure both mentor and mentee have institute set to "3mtt"

### Debug Commands
```bash
# Check what 3mtt mentors need assignments
php artisan mentors:assign-mentees --dry-run

# Check specific 3mtt mentor capacity
php artisan mentors:assign-mentees --mentor-id=123 --dry-run
```

## Institute Restriction

**Important**: This system is specifically designed for the 3mtt institute and will only work with:
- Mentors who have `institute = "3mtt"`
- Mentees who have `institute = "3mtt"`

Any attempts to assign mentees to mentors from other institutes will be rejected with an appropriate error message. 