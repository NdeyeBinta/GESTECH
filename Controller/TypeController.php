<?php
require_once '../Model/DB.php';
require_once'../Model/TypeDB.php';
if(isset($_POST['valider']))
{
    //echo $_POST['refprod'];
    $ok =addType($_POST['libtyp']);
    //echo $_POST['dateachat'].$_POST['qtachat'].$_POST['refprod'].$_POST['idfournisseur'];
    header("location:../View/FormType.php?result=$ok");
}
?>