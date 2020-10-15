<?php
require_once '../Model/DB.php';
require_once'../Model/AdminDB.php';
if(isset($_POST['valider']))
{
    //echo $_POST['nomU'];
    $good=addUser($_POST['nomU'],$_POST['prenomU'],$_POST['login'],$_POST['password']);
    //echo $good;
    header("location:../View/FormAdmin.php?resultat=$good");
}
$ok = getuser($_POST['login'],$_POST['password']);
while($row =mysqli_fetch_row($ok))
{
    if(isset($_POST['connecter']))
    {
        //echo $_POST['nomU'];
        $ok=getuser($_POST['login'],$_POST['password']);
        header("location:../Controller/AdminController.php?r=$row[0]");
    }

}

?>