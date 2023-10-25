<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
        }

        form {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            width: 300px;
        }

        label {
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
