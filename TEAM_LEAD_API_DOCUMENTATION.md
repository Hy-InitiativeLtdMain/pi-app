# Team Lead Management API Documentation

## Overview
This new feature allows mentors to select and manage team leads from their assigned mentees. Each mentor can have only one team lead at a time, providing a clear leadership structure within mentorship groups.

## Database Changes

### Migration
**File:** `2025_07_20_234517_add_team_lead_to_mentor_mentees_table.php`

```sql
ALTER TABLE mentor_mentees ADD COLUMN team_lead BOOLEAN DEFAULT FALSE NULL;
```

### Model Updates
**File:** `app/Models/MentorMentee.php`

- Added `team_lead` to fillable array
- Added `mentee()` relationship method

## API Endpoints

### 1. Set Team Lead
**Endpoint:** `POST /v1/mentorship/mentors/team-lead`

**Description:** Assign or remove team lead status from a mentee

**Headers:**
```
Authorization: Bearer {jwt_token}
Content-Type: application/json
```

**Request Body:**
```json
{
    "mentee_id": 123,
    "team_lead": true
}
```

**Parameters:**
- `mentee_id` (integer, required): ID of the mentee
- `team_lead` (boolean, required): true to set as team lead, false to remove

**Success Response (200):**
```json
{
    "success": true,
    "message": "Mentee has been set as team lead successfully",
    "data": {
        "mentor_id": 45,
        "mentee_id": 123,
        "team_lead": true,
        "updated_at": "2025-07-20T23:45:17.000000Z"
    }
}
```

**Error Responses:**
- **404:** Mentor profile not found
- **404:** Mentee not assigned to mentor
- **422:** Validation errors

### 2. Get Current Team Lead
**Endpoint:** `GET /v1/mentorship/mentors/team-lead`

**Description:** Retrieve the current team lead for the authenticated mentor

**Headers:**
```
Authorization: Bearer {jwt_token}
```

**Success Response (200) - With Team Lead:**
```json
{
    "success": true,
    "message": "Team lead found",
    "data": {
        "mentor_id": 45,
        "mentee_id": 123,
        "mentee": {
            "id": 123,
            "firstname": "John",
            "lastname": "Doe",
            "email": "john.doe@example.com",
            "phone": "+1234567890",
            "track": "Web Development",
            "institute": "3mtt"
        },
        "assigned_at": "2025-07-20T23:45:17.000000Z"
    }
}
```

**Success Response (200) - No Team Lead:**
```json
{
    "success": true,
    "message": "No team lead assigned yet",
    "data": null
}
```

## Business Logic

### Team Lead Assignment Rules
1. **Single Team Lead:** Each mentor can have only one team lead at a time
2. **Automatic Removal:** When assigning a new team lead, the previous team lead status is automatically removed
3. **Mentee Validation:** Only mentees assigned to the current mentor can be set as team lead
4. **Authentication Required:** All endpoints require valid mentor authentication

### Database Constraints
- `team_lead` field is nullable boolean with default `false`
- Foreign key constraints ensure data integrity
- Unique constraint on mentor-mentee pairs prevents duplicates

## Usage Examples

### Frontend Integration (JavaScript)

```javascript
// Set a mentee as team lead
async function setTeamLead(menteeId, isTeamLead) {
    const response = await fetch('/v1/mentorship/mentors/team-lead', {
        method: 'POST',
        headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            mentee_id: menteeId,
            team_lead: isTeamLead
        })
    });
    
    const result = await response.json();
    return result;
}

// Get current team lead
async function getCurrentTeamLead() {
    const response = await fetch('/v1/mentorship/mentors/team-lead', {
        headers: {
            'Authorization': `Bearer ${token}`
        }
    });
    
    const result = await response.json();
    return result;
}

// Example usage
setTeamLead(123, true).then(result => {
    console.log('Team lead set:', result.data);
});

getCurrentTeamLead().then(result => {
    if (result.data) {
        console.log('Current team lead:', result.data.mentee.firstname);
    } else {
        console.log('No team lead assigned');
    }
});
```

### Mobile App Integration

```dart
// Flutter/Dart example
class TeamLeadService {
    final String baseUrl = 'https://api.yourapp.com/v1/mentorship/mentors';
    
    Future<Map<String, dynamic>> setTeamLead(int menteeId, bool isTeamLead) async {
        final response = await http.post(
            Uri.parse('$baseUrl/team-lead'),
            headers: {
                'Authorization': 'Bearer $token',
                'Content-Type': 'application/json',
            },
            body: json.encode({
                'mentee_id': menteeId,
                'team_lead': isTeamLead,
            }),
        );
        
        return json.decode(response.body);
    }
    
    Future<Map<String, dynamic>> getCurrentTeamLead() async {
        final response = await http.get(
            Uri.parse('$baseUrl/team-lead'),
            headers: {'Authorization': 'Bearer $token'},
        );
        
        return json.decode(response.body);
    }
}
```

## UI/UX Considerations

### Mentor Dashboard Integration
- **Team Lead Badge:** Display a badge/icon next to the current team lead in mentee lists
- **Quick Actions:** Provide quick toggle buttons for setting/removing team lead status
- **Confirmation Dialogs:** Show confirmation when changing team lead to prevent accidental changes

### Mentee List Enhancement
```html
<!-- Example HTML structure -->
<div class="mentee-card" data-mentee-id="123">
    <div class="mentee-info">
        <h3>John Doe <span class="team-lead-badge">Team Lead</span></h3>
        <p>Web Development Track</p>
    </div>
    <div class="actions">
        <button onclick="toggleTeamLead(123, false)" class="btn-remove-lead">
            Remove Team Lead
        </button>
    </div>
</div>
```

## Security & Permissions

### Authentication
- All endpoints require valid JWT authentication
- Mentor must have an active mentor profile
- Only approved mentors can access team lead functionality

### Authorization
- Mentors can only manage team leads from their assigned mentees
- Cross-mentor team lead assignment is prevented
- Admin override capabilities can be implemented separately if needed

## Testing Scenarios

### Positive Test Cases
1. **Set Team Lead:** Successfully assign team lead to an assigned mentee
2. **Remove Team Lead:** Successfully remove team lead status
3. **Switch Team Lead:** Change team lead from one mentee to another
4. **Get Team Lead:** Retrieve current team lead information

### Negative Test Cases
1. **Invalid Mentee:** Attempt to set team lead for unassigned mentee
2. **Non-existent Mentee:** Use invalid mentee ID
3. **Unauthorized Access:** Access without proper authentication
4. **Invalid Data:** Send malformed request data

### Edge Cases
1. **No Mentees:** Mentor with no assigned mentees
2. **Single Mentee:** Mentor with only one mentee
3. **Concurrent Updates:** Multiple requests to change team lead simultaneously

## Performance Considerations

### Database Optimization
- Index on `mentor_id` and `team_lead` columns for faster queries
- Consider caching team lead information for frequently accessed data
- Efficient queries using single UPDATE statements

### API Performance
- Minimal database queries (1-2 per request)
- Eager loading of mentee relationships when needed
- Lightweight response payloads

## Future Enhancements

### Potential Features
1. **Team Lead History:** Track changes in team lead assignments
2. **Team Lead Permissions:** Special permissions for team leads
3. **Notifications:** Notify mentees when team lead status changes
4. **Analytics:** Team lead performance metrics and reports
5. **Bulk Operations:** Assign team leads across multiple mentors

### Integration Points
- **Calendar Integration:** Team leads get special calendar access
- **Communication Tools:** Enhanced messaging for team leads
- **Reporting Dashboard:** Team lead-specific metrics and insights

---

## API Routes Summary

| Method | Endpoint | Description | Auth Required |
|--------|----------|-------------|---------------|
| POST | `/v1/mentorship/mentors/team-lead` | Set/unset team lead | Yes |
| GET | `/v1/mentorship/mentors/team-lead` | Get current team lead | Yes |

## Status Codes

- **200:** Success
- **404:** Resource not found
- **422:** Validation error
- **401:** Unauthorized
- **403:** Forbidden

This team lead functionality provides mentors with a simple but powerful way to designate leadership within their mentee groups, enhancing the overall mentorship experience and organization.
