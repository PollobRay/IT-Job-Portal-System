<?php
    session_start();
?>
<script>
    function jobpostAlert()
    {
        alert("The job posted Successfully");
        window.location.href = "http://localhost/itjobportalsystem/";
    }

    function jobnotpostAlert()
    {
        alert("The job is not posted because the Account is not Approved");
        window.location.href = "http://localhost/itjobportalsystem/";
    }
</script>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $email=$_SESSION['email'];
        $company=$_SESSION['name'];

        $title = $_POST["jtitle"];
        $description = $_POST["des"];
        $experience  = (int) $_POST["experience"];
        
        $degree=(int) $_POST["degree"];
        $vacancy=(int) $_POST["vacancy"];
        $salary=(int) $_POST["salary"];
        $ddate=$_POST['ddate'];

        $expert="";
        
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'itjobportalsystem');

        //checking the account is Approved or not
        $q="select * from company where email='$email' && status='approved';";
        
        $result=mysqli_query($con,$q);
        $num=mysqli_num_rows($result);

        if($num==0)
        {
            echo "<script type='text/javascript'>jobnotpostAlert();</script>";
        }
        else
        {
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

                $q="insert into jobs (com_email,company, title, description, experience, expert, degree, vacancy, salary,ddate) VALUES ('$email','$company','$title','$description',$experience,'$expert',$degree,$vacancy,$salary,'$ddate');";

                $result=mysqli_query($con,$q);

                echo "<script type='text/javascript'>jobpostAlert();</script>";
        }
    }

        //end

        
    //header('location:http://localhost/jobsite/login/');
?>