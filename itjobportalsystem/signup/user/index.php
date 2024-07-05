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
                    <h2>User Registration Form</h2>
           
                        
                    <form action="submit.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">First Name </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="firstname" placeholder="Your name.." required>
                             </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Last Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
                            </div>
                        </div>
  
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Phone Number</label>
                            </div>
                            <div class="col-75">
                                 <input type="tel" id="phone" name="phone" placeholder="" required>
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
                                <label for="lname">Date Of Birth</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="birthdaytime" name="bdate" style="width: 90%; height: 25px;background-color:rgb(210, 210, 210); border: 1px solid #ccc; border-radius: 4px;">
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
  
                    <div class="row">
                        <div class="col-25">
                            <label for="lname"> Gender</label>
                        </div>
                        <div class="col-75">
                            <input type="radio" id="html" name="gender" value="male" checked="checked"><label>Male</label>
                            <input type="radio" id="css" name="gender" value="female"><label >Female</label>
                        </div>
                    </div>
  
                    <br>
                    <div class="row">
                        <input type="submit" id="myBtn" value="Sign Up">
                    </div>

                </form>


             </div>
            </div>
        </div>
    </div>
</body>

</html>