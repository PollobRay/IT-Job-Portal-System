<?php
    session_start(); //must be first line

    if(!isset($_SESSION['email'])) //if login not successfully
    {
        header('location:http://localhost/itjobportalsystem');
    }
    else if($_SESSION['login']!='admin')
      header('location:http://localhost/itjobportalsystem/');


?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>User Registation</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<script>
    function check()
    {
        if (document.getElementById('pass').value ==document.getElementById('pass1').value) 
        {
            document.getElementById('mgs').style.color = 'black';
            document.getElementById('mgs').innerHTML = 'password matched';
            document.getElementById("myBtn").disabled = false; 
        } 
        else 
        {
            document.getElementById('mgs').style.color = 'red';
            document.getElementById('mgs').innerHTML = 'password not matching';
            document.getElementById("myBtn").disabled = true; 
        }
    }
   
</script>
<body>
    <div class="container">
        <div class="card">
            <div class="inner-box">
                <div class="card-front">
                    <h2>Admin Addition Form</h2>
           
                        
                    <form action="submit.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Name </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="name" name="name" placeholder="Admin name.." required>
                             </div>
                        </div>
                     
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Email</label>
                            </div>
                            <div class="col-75">
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Password</label>
                            </div>
                        <div class="col-75">
                            <input type="password" id="pass" name="password" placeholder="Password" onkeyup='check();' required>
                        </div>
                    </div>
  
                    <div class="row">
                        <div class="col-25">
                            <label for="lname"> Confirm Password</label>
                        </div>
                        <div class="col-75">
                            <input type="password" id="pass1" name="password1" placeholder="Confirm Password" onkeyup='check();' required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <label for="lname"></label>
                        </div>
                        <div class="col-75">
                            <label id="mgs" ></label>
                        </div>
                    </div>
  
                    <br>
                    <div class="row">
                        <input type="submit" id="myBtn" value="Add Admin">
                    </div>

                </form>


             </div>
            </div>
        </div>
    </div>
</body>

</html>