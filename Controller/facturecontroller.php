<?php
require_once '../Model/DB.php';
require_once'../Model/factureDb.php';
if(isset($_POST['Valider']))
{

    $ok =addfact($_POST['dateFa'],$_POST['libFa'],$_POST['idv']);

    header("location:../View/formfacture.php?result=$ok");
}
if(isset($_POST['Modifier']))
{
    //echo $_POST['refprod'];
    $ok =updatefact($_POST['idFa'],$_POST['dateFa'],$_POST['libFa'],$_POST['idv']);
    header("location:../View/listefacture.php?result=$ok");
}
if(isset($_GET['Supprimer'])){
    $ok=deletefact($_GET['idfact']);
    header("location:../View/listefacture.php");
}
?>