<?php
    session_start(); //must be first line

    if(!isset($_SESSION['email'])) //if login not successfully
    {
        header('location:http://localhost/itjobportalsystem');
    }
    else if($_SESSION['login']!='admin')
      header('location:http://localhost/itjobportalsystem/');


?>

<?php

$email=$_SESSION['email'];

// for table company
$table = "admin";


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'itjobportalsystem');

$q="select * from $table where email= '$email';";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

$name="";
$pass="";



while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    $name=$row["name"];
    $pass=$row["password"];
}
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<script>
    function check()
    {
        if (document.getElementById('pass').value ==document.getElementById('pass1').value) 
        {
            document.getElementById('mgs').style.color = 'green';
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

<div claas="main">
    <div class="menu_bar">
        <a href="../../" class="logo">IT<span>JobPortal</span>System</a>
        <nav class="navbar">
        <ul>
           <li><a href="../../viewcompany">Company</a></li>
           <li><a href="../../viewuser">People</a></li>
           <li><a href="../../viewjobs">Jobs</a></li>
           <li><a href="../../editprofile/"style="color: red"><?php echo $_SESSION['name'];  ?></a></li>
           <li><a href="../../logout">Logout</a></li>
        </ul>
        </nav>
     </div><br><br>

    <div class="secondDiv"><br><br>
        <div class="title"><h2 style="text-align: center;">Edit Admin Information</h2></div>
            <br><br><br>
        <form action="submit.php" method="post">
        <hr>
        <div class="user-details">
            <div class="input-box">
                <span class="details" >Name</span>
                <input type="text" name="name" placeholder="Enter Admin Name" value="<?php echo $name; ?>" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="email" value="<?php echo $email; ?>" disabled>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" name="password" id="pass" placeholder="Enter Password.." value="<?php echo $pass; ?>" onkeyup='check();' required>
            </div>
            <div class="input-box">
                <span class="details">Confirm Password</span>
                <input type="password" name="password1" id="pass1" placeholder="Confirm Password.." value="<?php echo $pass; ?>" onkeyup='check();' required>
            </div>

            <div class="input-box">
                 <span class="details" id="mgs"></span>
                <label></label>
            </div>
            <div class="input-box">
                 <label class="details"></label>
                <label></label>
            </div>
        </div>

       <br><br>             
        <div class="button">
            <input type="submit" id="myBtn" value="Update" style="cursor:pointer;">
        </div>
        </form>
    </div>
</div>
</body>
</html>
