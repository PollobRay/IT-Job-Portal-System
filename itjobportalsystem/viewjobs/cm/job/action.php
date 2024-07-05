<?php
    session_start();

    if($_SESSION['canApply']=='yes')
    {
        $user_email=$_SESSION['email'];
        $job_serial_no=$_SESSION['job_serial_no'];
        $company_email=$_SESSION['company_email'];

        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'itjobportalsystem');

        $q="select * from applyjob where job_serial_no= $job_serial_no && user_email= '$user_email';";

        $result=mysqli_query($con,$q);
        $num=mysqli_num_rows($result);

        if($num==0)
        {
            $q="insert into applyjob (job_serial_no,company_email,user_email,status) values ($job_serial_no,'$company_email','$user_email','pending');";

            $result=mysqli_query($con,$q);

            echo "You application has been submitted";
        }


    }

   
?>