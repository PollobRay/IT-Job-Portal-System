<?php
    session_start();
?>
<script>
    function geetAlert(str)
    {
        alert("Login Successfully "+str);
    }
    function notFound()
    {
        alert("Not Found");
        window.location.href ="http://localhost/itjobportalsystem/login/";
    }
</script>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $table = "";
    $name='';



    if ($_POST['option'] == "user")
    {
        $table = "users";
        $name="fname";
    } else if ($_POST['option'] == "company")
    {
        $table = "company";
        $name="com_name";
    }
    else if($_POST['option'] == "admin")
    {
        $table = "admin";
        $name="name";
    }

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="select * from $table where email= '$email' && password= '$pass';";

    $result=mysqli_query($con,$q);
    $num=mysqli_num_rows($result);



    if($num==1)
    {
        $greetname='';
        $status='';

        if($table=="admin")
        {
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                $greetname=$row[$name];
            }
        }
        else
        {
            while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
            {
                $greetname=$row[$name];
                $status=$row['status'];
            }
        }
       

        echo "<script type='text/javascript'>geetAlert('$greetname');</script>";

        $_SESSION['name']=$greetname;
        $_SESSION['email']=$email;
        $_SESSION['login']=$table;
        $_SESSION['status']=$status;

        if($table=='users')
            header('location:http://localhost/itjobportalsystem/home/usr');
        else if($table=='company')
            header('location:http://localhost/itjobportalsystem/home/com');
        else if($table=='admin')
        {
            header('location:http://localhost/itjobportalsystem/home/admin');
        }
    }
    else
    {
        echo "<script type='text/javascript'>notFound();</script>";
	    //header('location:http://localhost/jobsite/');
    }
}

?>