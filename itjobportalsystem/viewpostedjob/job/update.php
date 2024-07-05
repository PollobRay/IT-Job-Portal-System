<?php
    session_start();
?>
<script>
    function jobpostAlert()
    {
        alert("The job updated Successfully");
        window.location.href = "http://localhost/itjobportalsystem/viewpostedjob/";
    }
</script>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset($_POST['viewapl'])) //view applicant list button pressed
        {
            header('location:http://localhost/itjobportalsystem/viewpostedjob/job/applicant');
        }

        $serial= $_SESSION['serial'];

        $title = $_POST["jtitle"];
        $description = $_POST["des"];
        $experience  = (int) $_POST["experience"];
        
        $degree=(int) $_POST["degree"];
        $vacancy=(int) $_POST["vacancy"];
        $salary=(int) $_POST["salary"];
        $ddate=$_POST['ddate'];

        $expert="";

        //set expert in programming language
        //c
        if(isset($_POST['c'])) //for checked
        {
            $expert="1";
        }
        else
        {
            $expert="0";
        }

        //c++
        if(isset($_POST['cpp'])) //for checked
        {
            $expert=$expert."1";
        }
        else
        {
            $expert=$expert."0";
        }

        //java
        if(isset($_POST['java'])) //for checked
        {
            $expert=$expert."1";
        }
        else
        {
            $expert=$expert."0";
        }

        //python
        if(isset($_POST['python'])) //for checked
        {
            $expert=$expert."1";
        }
        else
        {
            $expert=$expert."0";
        }

        //kotlin
        if(isset($_POST['kt'])) //for checked
        {
            $expert=$expert."1";
        }
        else
        {
            $expert=$expert."0";
        }

        //php
        if(isset($_POST['php'])) //for checked
        {
            $expert=$expert."1";
        }
        else
        {
            $expert=$expert."0";
        }

        //javascript
        if(isset($_POST['js'])) //for checked
        {
            $expert=$expert."1";
        }
        else
        {
            $expert=$expert."0";
        }

        //sql
        if(isset($_POST['sql'])) //for checked
        {
            $expert=$expert."1";
        }
        else
        {
            $expert=$expert."0";
        }

        //front end
        if(isset($_POST['fe'])) //for checked
        {
            $expert=$expert."1";
        }
        else
        {
            $expert=$expert."0";
        }

        //Back end
        if(isset($_POST['be'])) //for checked
        {
            $expert=$expert."1";
        }
        else
        {
            $expert=$expert."0";
        }


        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'itjobportalsystem');

        $q="update jobs set  title='$title', description='$description', experience=$experience, expert='$expert', degree=$degree, vacancy=$vacancy, salary=$salary,ddate='$ddate' where job_serial=$serial;";

        $result=mysqli_query($con,$q);

        echo "<script type='text/javascript'>jobpostAlert();</script>";
    }
    //header('location:http://localhost/jobsite/login/');
?>