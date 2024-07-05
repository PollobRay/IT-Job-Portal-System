<?php
    session_start();
    //$_SESSION['email']='microsoft@gmail.com';
?>
<?php

    $email="";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST["jpass"];
    }
    
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
<body>

<div claas="main">
    <div class="menu_bar">
        <a href="../../../" class="logo">IT<span>JobPortal</span>System</a>
        <nav class="navbar">
        <ul>
            <li><a href="../../../viewcompany">Company</a></li>
            <li><a href="../../../viewuser">People</a></li>
            <li><a href="../../../viewjobs">Jobs</a></li>
            <li><a href="../../../editprofile" style="color: red"><?php echo $_SESSION['name'];  ?></a></li>
            <li><a href="../../../logout">Logout</a></li>
        </ul>
        </nav>
     </div><br><br>

    <div class="secondDiv"><br><br>
        <div class="title"><h2 style="text-align: center;"><?php echo $cname; ?></h2></div>
            <br><br><br>
        <form action="action.php" method="post">
        <hr>
        <div class="user-details">
            <div class="input-box">
                <span class="details" >Company Name</span>
                <input type="text" name="cname" placeholder="Enter Company Name" value="<?php echo $cname; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">CEO</span>
                <input type="text" name="ceoname" placeholder="Enter CEO Name.." value="<?php echo $ceoname; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" name="email" value="<?php echo $email; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Phone</span>
                <input type="text" name="number" placeholder="Enter Company contact number.." value="<?php echo $number; ?>" readonly>
            </div>
            
            <div class="input-box">
                <span class="details">Location</span>
                <input type="text" name="loc" placeholder="Enter Company location.." value="<?php echo $loc; ?>" readonly>
            </div>
            <div class="input-box">
                <span class="details">Established Date</span>
                <input type="date" name="edate" value='<?php echo $date; ?>' readonly> 
            </div>

        </div>

       <br><br>             
        <input  type="submit" value="Remove the Company" >
        </form>
    </div>
</div>
</body>
</html>

