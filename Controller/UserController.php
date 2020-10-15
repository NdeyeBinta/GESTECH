<?php
require_once '../Model/DB.php';
require_once'../Model/AdminDB.php';
require_once'AdminController.php';
if(isset($_GET['r']))
{
    header("location:../View/gestech.html");
}
else{
    header("location:../View/FormUser.php");
}
?>