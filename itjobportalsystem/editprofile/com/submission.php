<?php
    session_start();
?>
<script>
    function successful()
    {
        alert("Updated Successfully");
        window.location.href ="http://localhost/itjobportalsystem/editprofile/com/";
    }
    function failed()
    {
        alert("Failed");
        window.location.href ="http://localhost/itjobportalsystem/editprofile/com/";
    }
</script>
<?php

    
    $email=$_SESSION['email'];

    //for table user
    $cname = $_POST["cname"];
    $ceoname  = $_POST["ceoname"];
    $pass = $_POST["password"];
    $number=$_POST["number"];
    $edate=$_POST["edate"];
    $loc=$_POST['loc'];

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="update company set com_name='$cname', ceo='$ceoname', password='$pass', cnumber='$number', edate='$edate',loc='$loc' where email='$email';";

    //end



    if(mysqli_query($con,$q))
    {
        echo "<script type='text/javascript'>successful();</script>";
    }
    else
    {
        echo "<script type='text/javascript'>failed();</script>";
    }



?>
