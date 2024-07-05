<?php
    session_start();
?>
<script>
    function successful()
    {
        alert("Updated Successfully");
        window.location.href ="http://localhost/itjobportalsystem/editprofile/usr/";
    }
    function failed()
    {
        alert("Failed");
        window.location.href ="http://localhost/itjobportalsystem/editprofile/usr/";
    }
</script>
<?php

    
    $email=$_SESSION['email'];

    //for table user
    $firstn = $_POST["fname"];
    $lastn  = $_POST["lname"];
    $pass = $_POST["password"];
    $cntno=$_POST["phone"];
    $bdate=$_POST["bdate"];
    $gender=$_POST['gender'];

    $table = "users";
   

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="update users set fname='$firstn', lname='$lastn', password='$pass', cnt_no='$cntno', bdate='$bdate',gender='$gender' where email='$email';";

    //end


    //for table people
    $fatname=$_POST["fatname"];
    $matname=$_POST["matname"];
    $address=$_POST["address"];
    $ssc_school=$_POST["ssc_school"];
    $ssc_group=$_POST["ssc_group"];
    $ssc_year=$_POST["ssc_year"];
    $ssc_board=$_POST["ssc_board"];
    $ssc_gpa=$_POST["ssc_gpa"];
    $hsc_college=$_POST["hsc_college"];
    $hsc_group=$_POST["hsc_group"];
    $hsc_year=$_POST["hsc_year"];
    $hsc_board=$_POST["hsc_board"];
    $hsc_gpa=$_POST["hsc_gpa"];
    $ug_degree=$_POST["ug_degree"];
    $ug_dept=$_POST["ug_dept"];
    $ug_cgpa=$_POST["ug_cgpa"];
    $ug_uni=$_POST["ug_uni"];
    $pg_degree=$_POST["pg_degree"];
    $pg_dept=$_POST["pg_dept"];
    $pg_cgpa=$_POST["pg_cgpa"];
    $pg_uni=$_POST["pg_uni"];
    $experience=$_POST["experience"];
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

   

    $q1="update people set fatname='$fatname', matname='$matname', address='$address', ssc_school='$ssc_school', ssc_group='$ssc_group', ssc_year='$ssc_year', ssc_board='$ssc_board',ssc_gpa='$ssc_gpa', hsc_college='$hsc_college', hsc_group='$hsc_group', hsc_year='$hsc_year', hsc_board='$hsc_board', hsc_gpa='$hsc_gpa', ug_degree='$ug_degree', ug_dept='$ug_dept', ug_cgpa='$ug_cgpa', ug_uni='$ug_uni', pg_degree='$pg_degree', pg_dept='$pg_dept', pg_cgpa='$pg_cgpa', pg_uni='$pg_uni',experience=$experience ,expert='$expert' where email='$email';";

    if(mysqli_query($con,$q) && mysqli_query($con,$q1))
    {
        echo "<script type='text/javascript'>successful();</script>";
    }
    else
    {
        echo "<script type='text/javascript'>failed();</script>";
    }



?>
