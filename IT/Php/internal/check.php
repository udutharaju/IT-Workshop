<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <link rel="stylesheet" href=style.css>
    <style>
    form{
    border:none;
    height:500px;
    width:400px;
    margin:auto;
    box-shadow:0px 10px 15px black;
    background-color:white;
    border-radius:10px;
    margin-top:100px;
    padding:10px;
    }
    .form-btn{
    background-color:deepskyblue;
    border-radius:15px;
    height:40px;
    width:300px;
    }
    .form-btn:hover{
        box-shadow:0px 5px 10px black;
        background-color:aqua;
    }
    input{
        border-radius:20px;
        height:25px;
        width:250px;
        padding:5px;
        font-style:bold;
    }
    </style>
</head>
<body>
<center>
    <div class="form-container">
        <form action="display.php" method="post">
            <h1>Checking Voting Eligibility</h1>
            <br><br>
            <label><b>First Name</b></label><br>
            <input type=text name=fname required placeholder="enter your first name"><br><br>
            <label><b>Last Name</b></label><br>
            <input type=text name=lname required placeholder="enter your last name"><br><br>
            <label><b>City</b></label><br>
            <input type=text name=city required placeholder="enter your city"><br><br>
            
            <input type=submit name=submit value="Check Eligibility" class="form-btn" style=font-size:20px;>
         
        </form>

    </div>
    </center>
</body>
</html>
