<?php
    session_start();

    if(!isset($_SESSION['email'])) //if login not successfully
    {
        header('location:http://localhost/itjobportalsystem');
    }
    else if($_SESSION['login']=='users')
      header('location:http://localhost/itjobportalsystem/editprofile/usr');
    else if($_SESSION['login']=='company')
        header('location:http://localhost/itjobportalsystem/editprofile/com');
    else if($_SESSION['login']=='admin')
    {
      	header('location:http://localhost/itjobportalsystem/editprofile/admin');
    }
?>
