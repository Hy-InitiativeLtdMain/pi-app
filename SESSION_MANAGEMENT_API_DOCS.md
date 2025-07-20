# Session Management API Documentation

## Overview
These new endpoints provide enhanced session (appointment) management and statistics for mentors in the PI mentorship platform.

## Updated Dashboard Controller Features

### 1. Enhanced Dashboard Statistics

**Endpoint:** `GET /v1/mentorship/mentors/dashboard`

**Updated Response:**
```json
{
    "total_fellows_managed": 15,
    "total_sessions_done": 25,
    "total_sessions_completed": 25,
    "total_sessions_pending": 8,
    "total_mentoring_hours": 42.5,
    "todos": [
        {
            "id": 1,
            "title": "Fill in your Bio",
            "field": "bio",
            "completed": false
        }
    ]
}
```

**Key Changes:**
- `total_sessions_completed`: Count of completed sessions (past appointments)
- `total_sessions_pending`: Count of upcoming/pending sessions
- Sessions are calculated based on `scheduled_end` or `scheduled_at` timestamps
- More accurate calculation of mentoring hours

### 2. Detailed Session Statistics

**Endpoint:** `GET /v1/mentorship/mentors/sessions/stats`

**Response:**
```json
{
    "completed_sessions": {
        "count": 25,
        "sessions": [
            {
                "id": 123,
                "title": "React Development Session",
                "scheduled_at": "2025-07-15T10:00:00Z",
                "scheduled_end": "2025-07-15T11:00:00Z",
                "total_time": 60,
                "meeting_type": "virtual"
            }
        ]
    },
    "pending_sessions": {
        "count": 8,
        "sessions": [
            {
                "id": 124,
                "title": "JavaScript Fundamentals",
                "scheduled_at": "2025-07-25T14:00:00Z",
                "scheduled_end": "2025-07-25T15:30:00Z",
                "total_time": 90,
                "meeting_type": "virtual"
            }
        ]
    },
    "total_hours_completed": 42.5
}
```

### 3. Upcoming Sessions (Next 7 Days)

**Endpoint:** `GET /v1/mentorship/mentors/sessions/upcoming`

**Response:**
```json
{
    "upcoming_sessions": [
        {
            "id": 124,
            "title": "JavaScript Fundamentals",
            "scheduled_at": "2025-07-25T14:00:00Z",
            "scheduled_end": "2025-07-25T15:30:00Z",
            "total_time": 90,
            "meeting_type": "virtual",
            "description": "Cover JavaScript basics and ES6 features"
        }
    ],
    "count": 5
}
```

### 4. Monthly Session Summary

**Endpoint:** `GET /v1/mentorship/mentors/sessions/summary-by-month?year=2025`

**Parameters:**
- `year` (optional): Year to get summary for (defaults to current year)

**Response:**
```json
{
    "year": "2025",
    "monthly_summary": [
        {
            "month": 1,
            "total_sessions": 10,
            "completed_sessions": 10,
            "pending_sessions": 0,
            "completed_minutes": 600
        },
        {
            "month": 7,
            "total_sessions": 15,
            "completed_sessions": 8,
            "pending_sessions": 7,
            "completed_minutes": 480
        }
    ]
}
```

## Technical Implementation Details

### Session Calculation Logic

**Completed Sessions:**
- Sessions where `scheduled_end < current_time` OR
- Sessions where `scheduled_end` is null and `scheduled_at < current_time`

**Pending Sessions:**
- Sessions where `scheduled_end >= current_time` OR  
- Sessions where `scheduled_end` is null and `scheduled_at >= current_time`

### Time Calculation

The system calculates mentoring hours using multiple fallback methods:

1. **Primary:** Sum of `hours` from `bookings` table (status = 'completed')
2. **Fallback:** Sum of `total_time` from completed `appointments` (converted from minutes)
3. **Dynamic:** Calculate duration from `scheduled_at` and `scheduled_end` timestamps

### Authentication & Authorization

All endpoints require:
- Valid authentication token
- Mentor role permissions
- Access to mentor profile data

### Error Handling

The system gracefully handles:
- Missing mentor profiles
- Null timestamp values
- Missing duration data
- Database connection issues

## Usage Examples

### Frontend Integration

```javascript
// Get enhanced dashboard stats
const dashboardStats = await fetch('/v1/mentorship/mentors/dashboard');

// Get detailed session statistics
const sessionStats = await fetch('/v1/mentorship/mentors/sessions/stats');

// Get upcoming sessions for the week
const upcomingSessions = await fetch('/v1/mentorship/mentors/sessions/upcoming');

// Get monthly summary for 2025
const monthlySummary = await fetch('/v1/mentorship/mentors/sessions/summary-by-month?year=2025');
```

### Dashboard Widget Implementation

```javascript
// Display session counts
const { total_sessions_completed, total_sessions_pending } = dashboardStats;
updateSessionCounters(total_sessions_completed, total_sessions_pending);

// Show upcoming sessions
const { upcoming_sessions } = upcomingSessions;
renderUpcomingSessionsWidget(upcoming_sessions);

// Create monthly chart
const { monthly_summary } = monthlySummary;
createMonthlySessionChart(monthly_summary);
```

## API Routes Summary

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | `/v1/mentorship/mentors/dashboard` | Enhanced dashboard with session counts |
| GET | `/v1/mentorship/mentors/sessions/stats` | Detailed session statistics |
| GET | `/v1/mentorship/mentors/sessions/upcoming` | Next 7 days upcoming sessions |
| GET | `/v1/mentorship/mentors/sessions/summary-by-month` | Monthly session summary |

All endpoints are protected by the `mentorship` middleware and require authentication.
