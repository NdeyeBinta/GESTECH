<?php
require_once '../Model/DB.php';
require_once '../Model/ClientDB.php';
if(isset($_POST['valider']))
{
    extract($_POST);
    $ok=addClient($nomcli,$prenomcli,$raisoncli,$adrcli,$telcli);
    /*echo $_POST['nomserv'];
    $ok = addClient($_POST['nomcli'],$_POST['prenomcli'],$_POST['raisoncli'],$_POST['adrcli'],$_POST['telcli']);
    echo $ok ;
    print_r($_POST);*/
    header("location:../View/FormClient.php?result=$ok");
}

if(isset($_GET['id']))
{
    $ok=deleteClient($_GET['id']);
    header("location:../View/ListeClient.php?result=$ok");
}
if(isset($_POST['edit'])){
    $ok=updateClient($_POST['idcli'],$_POST['nomcli'],$_POST['prenomcli'],$_POST['raisoncli'],$_POST['adrcli'],$_POST['telcli']);
    header("location:../View/listeClient.php?result=$ok");
}
?>