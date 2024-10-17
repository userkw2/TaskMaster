### H3 TaskMaster

*TaskMaster* is a task management system designed to help users manage their daily tasks efficiently. Users can create, update, delete, and toggle the status of tasks, all within an intuitive and simple interface.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [Technologies](#technologies)
- [Future Plans](#future-plans)
- [Contributors](#contributors)

## Features

- **Task Creation**: Users can add new tasks with a title and description.
- **Task Management**: Users can update or delete tasks.
- **Status Toggle**: Tasks can be marked as "Completed" or "Uncompleted."
- **User Authentication**: Only authenticated users can access their personalized task lists.

## Installation

To run the project locally, follow these steps:

1. **Clone the repository**:
    ```bash
    git clone https://github.com/yourusername/task-manager.git
    cd task-manager
    ```

2. **Database setup**:
    - Create a MySQL database named `task_manager`.
    - The database configuration (host, user, password, database) is done within the `login.php`, `register.php`, and `task_api.php` files, so no `.env` file is needed.
    - Import the provided SQL file `task_manager.sql` to create the necessary tables.

3. **Run the project**:
    - If you're using XAMPP, place the project folder in the `htdocs` directory.
    - Start Apache from the XAMPP control panel.
    - Access the app at `http://localhost/task-manager`.

## Usage

Once the application is running:

1. **Sign up or log in** to access your tasks.
2. **Add a task** by entering the title and description.
3. **View your task list** on the dashboard.
4. **Edit, delete, or toggle the status** of your tasks as needed.

## API Endpoints

The app includes the following API endpoints for managing tasks:

- **GET** `/tasks`: Fetch all tasks for the authenticated user.
- **POST** `/tasks`: Add a new task.
- **PUT** `/tasks/{id}`: Update an existing task.
- **DELETE** `/tasks/{id}`: Delete a task.
- **PATCH** `/tasks/{id}/toggle`: Toggle a task’s status between "Completed" and "Uncompleted."

These endpoints require authentication and use JSON for input/output.

## Technologies

- **Frontend**: HTML, CSS
- **Backend**: PHP (no additional frameworks)
- **Database**: MySQL (direct configuration in PHP files)
- **Server**: Local server via XAMPP

## Future Plans

Planned future enhancements include:

- **Task Categories**: Categorize tasks (e.g., Work, Personal).
- **Due Dates**: Add due dates and reminders for tasks.
- **Priority Levels**: Set task priority (Low, Medium, High).
- **Mobile App**: Build a mobile version of the app.

## Contributors

- **Kawthar Elkis** – Developer

---

This version reflects the direct handling of the database within your PHP files and makes it clear that there's no need for external environment configuration. Let me know if you want to add anything else!
