<?php
require_once '../Model/DB.php';
require_once '../Model/ProduitDB.php';
if(isset($_POST['valider']))
{
    extract($_POST);
    $ok=addProduit($designpro,$qtestock,$refeprod);
    //echo $_POST['nomserv'];

    //echo $ok ;
    //print_r($_POST);
    header("location:../View/FormProduit.php?result=$ok");
}
if(isset($_GET['id']))
{
    $ok=deleteProduit($_GET['id']);
    header("location:../View/ListeProduit.php?result=$ok");
}
if(isset($_POST['edit'])){
   // var_dump($_POST);
    $ok=updateProduit($_POST['idprod'],$_POST['designpro'],$_POST['qtestock'],$_POST['refeprod']);
    header("location:../View/ListeProduit.php?result=$ok");
}
?>