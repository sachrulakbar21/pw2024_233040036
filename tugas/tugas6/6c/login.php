<?php 

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "sachrul" && $_POST["password"] == "sachrul1234") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            color: #black;
            background-color: #5353ec;
        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-color: #c0c0c0;
            width: 80%;
            height: 80%;
            font-size: 1.5rem;
            font-family: Arial, Helvetica, Sans-serif;
            border-radius: 20px;
        }

        h1 {
            color: #5353ec;
        }

        input {
            margin-top: 10px;
            border: 2px solid #5353ec;
            width: 220px;
            height: 25px;   
        }

        button {
            margin-top: 15px;
            margin-left: 190px;
            cursor: pointer;
            font-size: 1.2rem;
            background-color: #5353ec;
            border-radius: 10px;
            padding: 5px;
            border: 3px solid white;
        }

        p {
            color: red;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1><i>Login admin</i></h1>
        <?php if (isset($error)) : ?>
            <p>Username/Password anda salah</p>
        <?php endif; ?>
        <form action="" method="post">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">Password  :</label>
            <input type="password" name="password" id="password">
            <br>
            <button type="submit" name="submit">Login</button>
        </form>
        </div>
    </div>
    

</body>
</html>
