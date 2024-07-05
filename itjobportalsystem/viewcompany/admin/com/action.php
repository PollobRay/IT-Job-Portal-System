<?php
    session_start();
    //$_SESSION['email']='microsoft@gmail.com';
?>
<script>
    function signupAlert()
    {
        alert("The Company is Removed Successfully");
        window.location="http://localhost/itjobportalsystem/viewcompany/admin/";
    }
</script>
<?php

    $email="";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST["email"];
    }
    
    // for table company
    $table = "company";
   

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="delete from $table where email= '$email';";
    $result=mysqli_query($con,$q);

    //also delete that company jobs posted
    $q="delete FROM jobs where com_email='$email';";
     $result=mysqli_query($con,$q);

     //Also delete that company's applied with that company's email
     $q="delete FROM applyjob where company_email='$email';";
     $result=mysqli_query($con,$q);

    echo "<script type='text/javascript'>signupAlert();</script>";
?>