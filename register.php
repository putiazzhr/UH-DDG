<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
            margin: 0;
            padding: 0;
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

        form {
            background-color: #F1F1F1;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input {
            width: calc(100% - 12px);
            padding: 8px;
            margin: 6px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
            background-color: #5cb85c;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4cae4c;
        }

        a {
            color: #5cb85c;
            text-decoration: none;
            margin-top: 10px;
        }

        a:hover {
            text-decoration: underline;
        }

        .back-button {
            display: inline-block;
            margin: 20px 0;
        }

        .back-button button {
            background-color: #337ab7;
            color: white;
        }

        .back-button button:hover {
            background-color: #286090;
        }

    </style>
</head>
<body>
    <div class="back-button">
        <a href="index.php"><button>Back home</button></a>
    </div>
    <h1>Halaman Register</h1>
    <form action="handler.php" method="post">
        <input type="text" name="username" placeholder="Ketik username" required><br>
        <input type="email" name="email" placeholder="Ketik email" required><br>
        <input type="password" name="password" placeholder="Ketik password" required><br>
        <button type="submit" name="aksi" value="register">Register</button>
    </form><br>
    <a href="login.php">Login disini</a>
</body>
</html>
