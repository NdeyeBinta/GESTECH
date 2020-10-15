<?php
require_once '../Model/DB.php';
require_once '../Model/FournisseurDB.php';
if(isset($_POST['valider']))
{
    //echo $_POST['nomserv'];
    $ok = addFour($_POST['nomfour'],$_POST['prenofour'],$_POST['raisonfour'],$_POST['adrfour'],$_POST['telfour']);
    //echo $ok ;
    header("location:../View/FormFour.php?result=$ok");
}

if(isset($_GET['id']))
{
    $ok=deleteFour($_GET['id']);
    header("location:../View/ListeFour.php?result=$ok");
}
if(isset($_POST['edit'])){
    $ok=updateFour($_POST['idfour'],$_POST['nomfour'],$_POST['prenofour'],$_POST['raisonfour'],$_POST['adrfour'],$_POST['telfour']);
    header("location:../View/ListeFour.php?result=$ok");
}
?>