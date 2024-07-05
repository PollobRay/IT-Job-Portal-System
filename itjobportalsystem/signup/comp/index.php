<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
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
                    <h2>Company Registration Form</h2>
                    <form action="submit.php" method="post">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Company Name </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="cname" placeholder="Company name.." required>
                             </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Name of CEO</label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="ceoname" placeholder="CEO.." required>
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
                                <label for="lname">Contact Number</label>
                            </div>
                            <div class="col-75">
                                 <input type="tel" id="phone" name="cnumber" placeholder="" required>
                             </div>
                        </div>
  
                        
  
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Establish Date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" id="birthdaytime" name="edate" style="width: 90%; height: 25px;background-color:rgb(210, 210, 210); border: 1px solid #ccc; border-radius: 4px;">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Location </label>
                            </div>
                            <div class="col-75">
                                <input type="text" id="fname" name="loc" placeholder="Location.." required>
                             </div>
                        </div>
  
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Password</label>
                            </div>
                        <div class="col-75">
                            <input type="password"  id="pass" name="password" placeholder="Password" onkeyup='check();' required>
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
                        <input type="submit" id="myBtn" value="Sign Up">
                    </div>
                    </form>

             </div>
            </div>
        </div>
    </div>
</body>

</html>