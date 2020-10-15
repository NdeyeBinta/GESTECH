<?php
require_once '../Model/DB.php';
require_once '../Model/AchatDB.php';
extract($_POST);
$mntA=$qteach*$puach;
if(isset($_POST['valider']))
{
    //var_dump($_POST);
    //echo $_POST['nomserv'];
    $ok = addAchat($_POST['puach'],$_POST['qteach'],$_POST['idfour'],$_POST['idprod'],$mntA,$_POST['dateA']);
    //echo $ok ;
   //print_r($_POST);
  header("location:../View/FormAchat.php?result=$ok");
}

if(isset($_GET['id']))
{
    $ok=deleteAchat($_GET['id']);
    header("location:../View/ListeAchat.php?result=$ok");
}
if(isset($_POST['edit'])){

    $ok=updateAchat($_POST['$idachat'],$_POST['$puach'],$_POST['$qteach'],$_POST['$idfour'],$_POST['$idprod'],$_POST['$mntA'],$_POST['$date']);
    header("location:../view/listeachat.php?result=$ok");
}
function getAchatByProduit($idprod){
    $sql = "SELECT * FROM achat WHERE idprod = $idprod";
    return executeSQL($sql);
}
function venteProd()
{
    $sql="SELECT p.refer,p.desig,a.qte,a.pu,a.qte*pu FROM `achat` a,produit p,client c WHERE c.idcli=a.idcli AND p.idprod=a.idprod";
    return executeSql($sql);
}
?>