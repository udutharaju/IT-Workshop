<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form</title>
    <link rel="stylesheet" href=Style.css>
    <style>
     label{
        display:flex;
     }
    </style>
    <script>
   /* function calculateamount()
    {
        const checkboxes = document.querySelectorAll('input[id="sub"]:checked');
      var total = 0;

      checkboxes.forEach((checkbox) => {
    
        total += 250;
      });
      document.getElementById('amount').textContent= total;
      return total;


    }*/
        </script>
</head>
<body>
    <div class="form-container">
        <form name=form1 action="Verify.php" method="post">
            <h1>Registration Form</h1>
            <br><br>
            <label> Registration Id</label>
            <input type=text name=id required placeholder="enter your id">

            <label>Name</label>
            <input type=text name=name required placeholder="enter your name">

            <label>Gender</label>
            <input type=text name=gender required placeholder="enter gender">

            <label>year</label>
            <input type=text name=year required placeholder="enter your year">


            <label>semester</label>
            <input type=text name=sem required placeholder="enter your semester">

            <label>mobile no.</label>
            <input type=text name=number required placeholder="enter your mobile no.">

            <label>Subjects</label>
            
            OS <input type=checkbox name=sub_list[] value=os id=sub >
            DBMS <input type=checkbox name=sub_list[] value=dbms id=sub >
            JAVA <input type=checkbox name=sub_list[] value=java id=sub >
            <br>
           <!-- <button type="button" onclick="calculateamount()">Calculate Amount</button>
            
            <div id="totalAmount">Total Amount: $<span id="amount" name=amount>0.00</span></div>-->
            <label>Amount</label>
            <input type=text name=amount id=amount required placeholder="enter amount manually">
            <label>Photo</label>
            <input type="file" name="phto" required>
            <input type=submit name=submit value="register now" class="form-btn">
            <p>Already have an account?<a href="Login.php">login</a></p>
        </form>

    </div>
</body>
</html>
