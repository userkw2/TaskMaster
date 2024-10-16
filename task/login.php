<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new mysqli('localhost', 'root', '', 'task_manager');
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $username = $db->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT id, password FROM users WHERE username = ?");
    if ($stmt === false) {
        die("Error in prepare statement: " . $db->error);
    }
    
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "User not found";
    }

    $stmt->close();
    $db->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            background-image: url('assets/media/logos/logn.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column flex-root">
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                <form class="form w-100" method="POST" action="">
                    <div class="text-center mb-10">
                        <h1 class="text-dark mb-3">Sign In to Task Master</h1>
                    </div>
                    <?php if (isset($error)): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <div class="fv-row mb-10">
                        <label class="form-label fs-6 fw-bolder text-dark">Username</label>
                        <input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" required />
                    </div>
                    <div class="fv-row mb-10">
                        <label class="form-label fw-bolder text-dark">Password</label>
                        <input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" required />
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary w-100 mb-5">Continue</button>
                    </div>
                    <div class="text-center">
                        <a href="register.php" class="text-primary">Don't have an account? Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
</body>
</html>
