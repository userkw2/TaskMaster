<?php
session_start();
header('Content-Type: application/json');

$db = new mysqli('localhost', 'root', '', 'task_manager');

if ($db->connect_error) {
    die(json_encode(['error' => 'Database connection failed']));
}

if (!isset($_SESSION['user_id'])) {
    die(json_encode(['error' => 'Not authenticated']));
}

$user_id = $_SESSION['user_id'];

switch ($_POST['action']) {
    case 'getTasks':
        $result = $db->query("SELECT * FROM tasks WHERE user_id = $user_id");
        $tasks = [];
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
        echo json_encode($tasks);
        break;

    case 'addTask':
        $title = $db->real_escape_string($_POST['title']);
        $description = $db->real_escape_string($_POST['description']);
        $db->query("INSERT INTO tasks (user_id, title, description, status) VALUES ($user_id, '$title', '$description', 'Uncompleted')");
        echo json_encode(['id' => $db->insert_id]);
        break;

    case 'deleteTask':
        $task_id = intval($_POST['taskId']);
        $db->query("DELETE FROM tasks WHERE id = $task_id AND user_id = $user_id");
        echo json_encode(['success' => true]);
        break;

    case 'toggleStatus':
        $task_id = intval($_POST['taskId']);
        $db->query("UPDATE tasks SET status = CASE WHEN status = 'Completed' THEN 'Uncompleted' ELSE 'Completed' END WHERE id = $task_id AND user_id = $user_id");
        echo json_encode(['success' => true]);
        break;
    case 'updateTask':
        $task_id = intval($_POST['taskId']);
        $title = $db->real_escape_string($_POST['title']);
        $description = $db->real_escape_string($_POST['description']);
        $db->query("UPDATE tasks SET title = '$title', description = '$description' WHERE id = $task_id AND user_id = $user_id");
        echo json_encode(['success' => true]);
        break;

    default:
        echo json_encode(['error' => 'Invalid action']);
}

$db->close();
?>
