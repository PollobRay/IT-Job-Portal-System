<?php
    session_start();
    //$_SESSION['email']='microsoft@gmail.com';
?>
<script>
    function signupAlert()
    {
        alert("The User Account is Approved Successfully");
        window.location="http://localhost/itjobportalsystem/approve/user";
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

    $q="UPDATE $table SET status = 'approved' WHERE email= '$email';";
    $result=mysqli_query($con,$q);

    echo "<script type='text/javascript'>signupAlert();</script>";
?>