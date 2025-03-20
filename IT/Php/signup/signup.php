<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,intial-scale">
<title>registration form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="signup">
<h1>sign up</h1>
<form action="verify.php" method="post">
<label>Id</label>
<input type=text name=id required>
<label>First Name</label>
<input type="text" name="fname" required>
<label>Last Name</label>
<input type="text" name="lname" required>
<label>Gender</label>
<input type="text" name="gender" required>
<label>Contact Adress</label>
<input type="text" name="number" required>
<label>Address</label>
<input type="text" name="address" required>
<label>Email</label>
<input type="email" name="email" required>
<label>Password</label>
<input type="password" name="pass" required>
<input type="submit" name="" value="submit">
</form>
Already have an account
<a href="login.php">login</a></p>
</div>
</body>
</html>