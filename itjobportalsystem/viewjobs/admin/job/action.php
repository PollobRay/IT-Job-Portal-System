<?php
    session_start();

?>
<script>
    function signupAlert()
    {
        alert("The Job is Removed Successfully");
        window.location="http://localhost/itjobportalsystem/viewjobs/admin/";
    }
</script>
<?php

   
        $serial=(int)$_POST['jpass'];
        
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'itjobportalsystem');

        $q="delete from jobs where job_serial=$serial;";

        

        $result=mysqli_query($con,$q);


        //Also delete user applied with that job serial
        $q="delete FROM applyjob where job_serial_no=$serial;";
        $result=mysqli_query($con,$q);
       
        echo "<script type='text/javascript'>signupAlert();</script>";
   
?>