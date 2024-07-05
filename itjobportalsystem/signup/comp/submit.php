<script>
    function signupAlert()
    {
        alert("Sign Up Successfully");
        window.location="http://localhost/itjobportalsystem/login";
    }
</script>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $cname = $_POST["cname"];
    $ceoname  = $_POST["ceoname"];
    $pass = $_POST["password"];
    $cntno=$_POST["cnumber"];
    $edate=$_POST["edate"];
    $loc=$_POST["loc"];


    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="insert into company (email, com_name,ceo, password, cnumber ,loc  ,edate ) VALUES ('$email','$cname','$ceoname','$pass','$cntno','$loc','$edate');";

    $result=mysqli_query($con,$q);

    echo "<script type='text/javascript'>signupAlert();</script>";
}
//header('location:http://localhost/jobsite/login/');
?>

