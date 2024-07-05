<?php
    session_start();
?>

<script>
    function successful()
    {
        alert("Updated Successfully");
        window.location.href ="http://localhost/itjobportalsystem/editprofile/";
    }
    function failed()
    {
        alert("Failed");
        window.location.href ="http://localhost/itjobportalsystem/editprofile/";
    }
</script>

<?php

$email=$_SESSION['email'];

//for table user
$name = $_POST["name"];
$pass = $_POST["password"];

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'itjobportalsystem');

$q="update admin set name='$name',  password='$pass'  where email='$email';";


if(mysqli_query($con,$q))
{
    echo "<script type='text/javascript'>successful();</script>";
}
else
{
    echo "<script type='text/javascript'>failed();</script>";
}

?>

