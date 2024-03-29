<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teachers login</title><style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-image: url("1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    form {
        background-color: rgba(255, 255, 255, 0.7); /* Set the alpha channel to make only the form background slightly transparent */
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
    }

    .avatar {
        width: 100px;
        border-radius: 50%;
    }

    .container {
        padding: 16px;
        width: 100%;
        box-sizing: border-box;
    }

    input[type=text],
    input[type=password] {
        width: calc(100% - 40px);
        padding: 12px 20px;
        margin: 8px 0 16px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    input[type=submit] {
        background-color: #4caf50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        width: calc(100% - 40px);
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>


</head>
<body>

<form id="loginForm" action="validate.php" method="POST">
    <div class="imgcontainer">
        <img src="3.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <input type="submit" name="submit" value="Login" onclick="validateForm()">
    </div>
</form>

</body>
</html>
