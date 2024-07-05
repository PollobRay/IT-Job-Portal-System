<?php
    session_start(); //must be first line

    if(!isset($_SESSION['email'])) //if login not successfully
    {
        header('location:http://localhost/itjobportalsystem');
    }
    else if($_SESSION['login']=='users')
         header('location:http://localhost/itjobportalsystem/home/usr');
    else if($_SESSION['login']=='company')
         header('location:http://localhost/itjobportalsystem/home/com');
    else if($_SESSION['login']=='admin')
    {
        header('location:http://localhost/itjobportalsystem/home/admin');
    }


?>
