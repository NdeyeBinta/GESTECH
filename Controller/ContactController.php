<?php
require_once '../Model/DB.php';
require_once'../Model/ContactDB.php';
if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
{
    extract($_POST);
    if(!empty($nom) && !empty($prenom)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($message)) {
        $ok = addContact($nom, $prenom,$tel,$adress,$email,$message);
    }    header("location:../View/formContact.php?resultat=$ok");
}
if(isset($_GET['id']))
{
    $ok=deleteContact($_GET['id']);
    header("location:../View/ListeContact.php?result=$ok");
}
if(isset($_POST['edit'])){
    // var_dump($_POST);
    $ok=updateContact($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['tel'],$_POST['adress'],$_POST['email'],$_POST['message']);
    header("location:../View/ListeContact.php?result=$ok");
}
?>