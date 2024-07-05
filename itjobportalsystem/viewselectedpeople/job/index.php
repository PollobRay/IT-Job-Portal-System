<?php
    session_start();

    if(!isset($_SESSION['email']) || $_SESSION['login']!='company')
    {
        header('location:http://localhost/itjobportalsystem');
    }

    $serial=0;

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $serial =(int) $_POST["jpass"];
    }

    $_SESSION['serial']=$serial;
    header('location:http://localhost/itjobportalsystem/viewselectedpeople/job/applicant');

?>