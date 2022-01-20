# Activity Log

## What is this?

Activity log is an application for tracking your own activities. It can be used like a journal, or like the reverse of a to-do list (a "to-done" list). Keep a record of tasks completed, accomplishments achieved, etc.

## Technical Details

### Database

#### Tables

Each table contains the standard id and timestamp fields from Eloquent.

##### Activities

| Column | Type | Description |
| ------ | ---- | ----------- |
| `name` | string | The name of the activity |
| `date` | date | The date of the activity |
| `start_time` | dateTime | The start time of the activity |
| `end_time` | dateTime | The end time of the activity |
| `category` | foreignId | The category of the activity |
| `description` | text | The description of the activity |


##### Categories

| Column | Type | Description |
| ------ | ---- | ----------- |
| `name` | string | The name of the category |
| `description` | text | The description of the category |
