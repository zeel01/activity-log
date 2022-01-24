# Activity Log

## What is this?

Activity log is an application for tracking your own activities. It can be used like a journal, or like the reverse of a to-do list (a "to-done" list). Keep a record of tasks completed, accomplishments achieved, etc.

![Activities](/meta/activities.png)
![Activity](/meta/activity.png)

## Technical Details

This is a simple Laravel application meant to test the basic features of the framework utilizing routes, database models, and Blade templates.

### Routes

| Method | Route | Description |
|--------|-------|-------------|
| GET | `/activities` | List all activities |
| GET | `/activities/create` | Create a new activity |
| GET | `/activities/{id}` | Show an activity |
| PUT | `/activities/{id}` | Update an activity |
| DELETE | `/activities/{id}` | Remove an activity |

### Database

#### Tables

Each table contains the standard id and timestamp fields from Eloquent.

##### Activities

| Column | Type | Description |
| ------ | ---- | ----------- |
| `name` | string | The name of the activity |
| `start_time` | dateTime | The start time of the activity |
| `end_time` | dateTime | The end time of the activity |
| `description` | text | The description of the activity |