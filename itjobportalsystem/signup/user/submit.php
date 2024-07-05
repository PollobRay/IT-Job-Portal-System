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
    $firstn = $_POST["firstname"];
    $lastn  = $_POST["lastname"];
    $pass = $_POST["password"];
    $cntno=$_POST["phone"];
    $bdate=$_POST["bdate"];
    
    $gender=$_POST['gender'];

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="insert into users (email, fname, lname, password,cnt_no ,bdate,gender) VALUES ('$email','$firstn','$lastn','$pass','$cntno','$bdate','$gender');";

    $result=mysqli_query($con,$q);

    $q1="insert into people (email,ssc_gpa,hsc_gpa,ug_cgpa,pg_cgpa,experience,expert) values ('$email','0.00','0.00','0.00','0.00',0,'0000000000'); ";

    $result=mysqli_query($con,$q1);

    echo "<script type='text/javascript'>signupAlert();</script>";
}
//header('location:http://localhost/jobsite/login/');
?>

