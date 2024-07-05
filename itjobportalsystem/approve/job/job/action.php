<?php
    session_start();

?>
<script>
    function signupAlert()
    {
        alert("The Job is Approved Successfully");
        window.location="http://localhost/itjobportalsystem/viewjobs/admin/";
    }
</script>
<?php

   
        $serial=(int)$_POST['jpass'];
        
        $con=mysqli_connect('localhost','root','');
        mysqli_select_db($con,'itjobportalsystem');

        $q="update jobs set status='approved' where job_serial=$serial; ";
        $result=mysqli_query($con,$q);
       
        echo "<script type='text/javascript'>signupAlert();</script>";
   
?>