<?php
    session_start();
    //$_SESSION['email']='microsoft@gmail.com';
?>
<script>
    function signupAlert()
    {
        alert("The User is Removed Successfully");
        window.location="http://localhost/itjobportalsystem/viewuser/admin/";
    }
</script>

<?php

    $email="";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email = $_POST["email"];
    }
    
    // for table company
    $table = "users";
   

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="delete from $table where email= '$email';";
    $result=mysqli_query($con,$q);

    //also delete that from people
    $q="delete FROM people where email='$email';";
     $result=mysqli_query($con,$q);

     //Also delete that user's all job application
     $q="delete FROM applyjob where user_email='$email';";
     $result=mysqli_query($con,$q);

    echo "<script type='text/javascript'>signupAlert();</script>";
?>