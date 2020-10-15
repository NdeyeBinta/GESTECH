<?php
require_once '../Model/DB.php';
require_once'../Model/RegleventeDB.php';
if(isset($_POST['valider']))
{
    //echo $_POST['refprod'];
    extract($_POST);
    $ok=addregvente($libRV ,$dateRV,$idv,$idcli,$idtyp,$mntRV,$idFV);

    //echo $_POST['dateachat'].$_POST['qtachat'].$_POST['refprod'].$_POST['idfournisseur'];
    header("location:../View/FormReglevente.php?result=$ok");
}
/*if(isset($_POST['edit'])){
    $ok=updateregachat($_POST['idreg'],$_POST['datereg'],$_POST['montantreg'],$_POST['idachat'],$_POST['idt']);
    header("location:../view/listeregachat.php?result=$ok");
}*/
?>