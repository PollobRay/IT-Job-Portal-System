<?php
    session_start();
    //$_SESSION['email']='microsoft@gmail.com';

    if(!isset($_SESSION['email'])) //if login not successfully
    {
        header('location:http://localhost/itjobportalsystem');
    }
    else if($_SESSION['login']!='company')
      header('location:http://localhost/itjobportalsystem/editprofile/');
?>
<?php

    $email=$_SESSION['email'];

    // for table company
    $table = "company";
   

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="select * from $table where email= '$email';";

    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);

    $cname="";
    $ceoname="";
    $date="";
    $pass="";
    $number="";
    $loc="";
   

    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
        $cname=$row["com_name"];
        $ceoname=$row["ceo"];
        $date=$row["edate"];
        $pass=$row["password"];
        $number=$row["cnumber"];
        $loc=$row["loc"];
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
           <li><a href="../../editprofile/com"style="color: red"><?php echo $_SESSION['name'];  ?></a></li>
           <li><a href="../../logout">Logout</a></li>
        </ul>
        </nav>
     </div><br><br>

    <div class="secondDiv"><br><br>
        <div class="title"><h2 style="text-align: center;">Edit Company Information</h2></div>
            <br><br><br>
        <form action="submission.php" method="post">
        <hr>
        <div class="user-details">
            <div class="input-box">
                <span class="details" >Company Name</span>
                <input type="text" name="cname" placeholder="Enter Company Name" value="<?php echo $cname; ?>"  required>
            </div>
            <div class="input-box">
                <span class="details">CEO</span>
                <input type="text" name="ceoname" placeholder="Enter CEO Name.." value="<?php echo $ceoname; ?>" required>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" value="<?php echo $email; ?>" disabled>
            </div>
            <div class="input-box">
                <span class="details">Phone</span>
                <input type="text" name="number" placeholder="Enter Company contact number.." value="<?php echo $number; ?>" required >
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

            <div class="input-box">
                <span class="details">Location</span>
                <input type="text" name="loc" placeholder="Enter Company location.." value="<?php echo $loc; ?>"  required>
            </div>
            <div class="input-box">
                <span class="details">Established Date</span>
                <input type="date" name="edate" value='<?php echo $date; ?>'>
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

