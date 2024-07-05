<?php
    session_start();
?>
<script>
    function jobpostAlert()
    {
        alert("The person is Deselected for the job");
        window.location.href ="http://localhost/itjobportalsystem/viewselectedpeople/job/applicant/";
    }
</script>

<?php

    $serial=$_SESSION['applied_serial'];
    $_SESSION['applied_serial']=0;

    $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'itjobportalsystem');

    $q="update applyjob set status='pending' where applied_job_serial_no=$serial;";

    $result=mysqli_query($con,$q);

    echo "<script type='text/javascript'>jobpostAlert();</script>";

?>