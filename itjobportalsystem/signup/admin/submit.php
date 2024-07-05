<script>
    function signupAlert()
    {
        alert("Admin Added Successfully");
        window.location="http://localhost/itjobportalsystem/";
    }
</script>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $name = $_POST["name"];
    $pass = $_POST["password"];

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="insert into admin (name,email, password) VALUES ('$name','$email','$pass');";

    $result=mysqli_query($con,$q);

    echo "<script type='text/javascript'>signupAlert();</script>";
}
//header('location:http://localhost/jobsite/login/');
?>

