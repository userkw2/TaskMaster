<?php
// Start the session to keep track of the logged-in user
session_start();

// Tell the browser that we’re sending JSON data
header('Content-Type: application/json');

// Connect to the database (MySQL) using the provided credentials
$db = new mysqli('localhost', 'root', '', 'task_manager');

// Check if the database connection was successful
if ($db->connect_error) {
    // If the connection fails, send a JSON error message and stop the script
    die(json_encode(['error' => 'Database connection failed']));
}

// Check if the user is logged in by seeing if their user ID is in the session
if (!isset($_SESSION['user_id'])) {
    // If they’re not logged in, return an error message and stop the script
    die(json_encode(['error' => 'Not authenticated']));
}

// Store the logged-in user's ID in a variable for easy access
$user_id = $_SESSION['user_id'];

// Based on what action is requested (passed in via POST), handle the request
switch ($_POST['action']) {
    
    // If the action is to get all the tasks for this user
    case 'getTasks':
        // Fetch all tasks that belong to this user from the database
        $result = $db->query("SELECT * FROM tasks WHERE user_id = $user_id");
        $tasks = [];
        
        // Go through each task in the result and add it to the tasks array
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
        
        // Send back the tasks as a JSON response
        echo json_encode($tasks);
        break;

    // If the action is to add a new task
    case 'addTask':
        // Clean up the title and description to avoid any unwanted characters (security measure)
        $title = $db->real_escape_string($_POST['title']);
        $description = $db->real_escape_string($_POST['description']);
        
        // Insert the new task into the database with default status as 'Uncompleted'
        $db->query("INSERT INTO tasks (user_id, title, description, status) VALUES ($user_id, '$title', '$description', 'Uncompleted')");
        
        // Send back the ID of the newly created task as confirmation
        echo json_encode(['id' => $db->insert_id]);
        break;

    // If the action is to delete a task
    case 'deleteTask':
        // Get the task ID that was passed in and make sure it's a valid number
        $task_id = intval($_POST['taskId']);
        
        // Delete the task, but only if it belongs to the current user
        $db->query("DELETE FROM tasks WHERE id = $task_id AND user_id = $user_id");
        
        // Let the client know the task was successfully deleted
        echo json_encode(['success' => true]);
        break;

    // If the action is to toggle the task's status between 'Completed' and 'Uncompleted'
    case 'toggleStatus':
        // Get the task ID that was passed in
        $task_id = intval($_POST['taskId']);
        
        // Toggle the task's status by checking its current state and flipping it
        $db->query("UPDATE tasks SET status = CASE WHEN status = 'Completed' THEN 'Uncompleted' ELSE 'Completed' END WHERE id = $task_id AND user_id = $user_id");
        
        // Confirm the status was toggled successfully
        echo json_encode(['success' => true]);
        break;

    // If the action is to update an existing task's title and description
    case 'updateTask':
        // Get the task ID and clean up the new title and description
        $task_id = intval($_POST['taskId']);
        $title = $db->real_escape_string($_POST['title']);
        $description = $db->real_escape_string($_POST['description']);
        
        // Update the task with the new title and description
        $db->query("UPDATE tasks SET title = '$title', description = '$description' WHERE id = $task_id AND user_id = $user_id");
        
        // Confirm the task was updated successfully
        echo json_encode(['success' => true]);
        break;

    // If the action provided doesn’t match any of the cases above
    default:
        // Let the client know the action they provided is invalid
        echo json_encode(['error' => 'Invalid action']);
}

// Close the database connection when done
$db->close();
?>
