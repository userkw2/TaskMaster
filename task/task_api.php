<?php
// Start the session to keep track of the logged-in user
session_start();

header('Content-Type: application/json');

// Connect to the database (MySQL) using the provided credentials
$db = new mysqli('localhost', 'root', '', 'task_manager');

// Check if the database connection was successful
if ($db->connect_error) {
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
    
    
    case 'getTasks':
        // Fetch all tasks that belong to this user from the database
        $result = $db->query("SELECT * FROM tasks WHERE user_id = $user_id");
        $tasks = [];
        
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
        
        
        echo json_encode($tasks);
        break;

    // If the action is to add a new task
    case 'addTask':
        // Clean up the title and description to avoid any unwanted characters
        $title = $db->real_escape_string($_POST['title']);
        $description = $db->real_escape_string($_POST['description']);
        
        // Insert the new task into the database with default status as 'Uncompleted'
        $db->query("INSERT INTO tasks (user_id, title, description, status) VALUES ($user_id, '$title', '$description', 'Uncompleted')");
        
        
        echo json_encode(['id' => $db->insert_id]);
        break;

    // If the action is to delete a task
    case 'deleteTask':
        // Get the task ID that was passed in and make sure it's a valid number
        $task_id = intval($_POST['taskId']);
        
        
        $db->query("DELETE FROM tasks WHERE id = $task_id AND user_id = $user_id");
        
       
        echo json_encode(['success' => true]);
        break;

    // If the action is to toggle the task's status between 'Completed' and 'Uncompleted'
    case 'toggleStatus':
        // Get the task ID that was passed in
        $task_id = intval($_POST['taskId']);
        
        
        $db->query("UPDATE tasks SET status = CASE WHEN status = 'Completed' THEN 'Uncompleted' ELSE 'Completed' END WHERE id = $task_id AND user_id = $user_id");
        
    
        echo json_encode(['success' => true]);
        break;

    // If the action is to update an existing task's title and description
    case 'updateTask':
        // Get the task ID and clean up the new title and description
        $task_id = intval($_POST['taskId']);
        $title = $db->real_escape_string($_POST['title']);
        $description = $db->real_escape_string($_POST['description']);
        
        
        $db->query("UPDATE tasks SET title = '$title', description = '$description' WHERE id = $task_id AND user_id = $user_id");
        
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
