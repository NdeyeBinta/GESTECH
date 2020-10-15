<?php
require_once '../Model/DB.php';
require_once '../Model/VenteDB.php';
extract($_POST);

if(isset($_POST['valider']))
{$mntV=$qtev*$puv;
   // var_dump($_POST);
    //echo $_POST['nomserv'];
    $ok = addVente($_POST['puv'],$_POST['qtev'],$_POST['idcli'],$_POST['idprod'],$mntV,$_POST['dateV']);
    //echo $ok ;
   //print_r($_POST);
    header("location:../View/FormVente.php?result=$ok");
}

if(isset($_GET['id']))
{
    $ok=deleteVente($_GET['id']);
    header("location:../View/ListeVente.php?result=$ok");
}
function achatProd()
{
    $sql="SELECT p.refer,p.desig,v.qte,v.pu,v.qte*v.pu FROM `vente` v,produit p WHERE p.idprod=v.idprod";
    return requeteSql($sql);
}
?>