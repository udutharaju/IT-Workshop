<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href=style.css>
</head>
<body>
    <div class="form-container">
        <form action="Pass_verify.php" method="post">
            <h1>Login now</h1>
            <br><br>
            <label>Id</label>
            <input type=text name=id required placeholder="enter your id">
            <label>Name</label>
            <input type=text name=name required placeholder="enter your name">
            <input type=submit name=submit value="login now" class="form-btn">
            <p>Don't have an account?<a href="Register.php">Register now</a></p>
        </form>

    </div>
</body>
</html>
