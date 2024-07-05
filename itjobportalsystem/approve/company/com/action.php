<?php
    session_start();
    //$_SESSION['email']='microsoft@gmail.com';
?>
<script>
    function signupAlert()
    {
        alert("The Company is Approved Successfully");
        window.location="http://localhost/itjobportalsystem/approve/company/";
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

    $q="update $table set status='approved' where email='$email';";
    $result=mysqli_query($con,$q);

    echo "<script type='text/javascript'>signupAlert();</script>";
?>