<?php
    session_start();
    if (!$_SESSION['data']) {
        header('Location: login.php');
        exit();
    }
    $data = $_SESSION['data'];
    $username = $data['username'];
    $email = $data['email'];
    $password = $data['password'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        h2, h3 {
            color: #555;
        }

        form {
            margin-top: 20px;
        }

        button {
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 4px;
            background-color: #d9534f;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <h1>Halaman Dashboard</h1>
    <h2>
        Nama kamu: <?php echo $username ?>
    </h2>
    <h3>
        Email kamu: <?php echo $email ?>
    </h3>
    <h3>
        Password kamu: <?php echo $password ?>
    </h3>
    <form action="handler.php" method="post">
        <button name="aksi" value="logout">Logout</button>
    </form>
</body>
</html>
