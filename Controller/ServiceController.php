<?php
require_once '../Model/DB.php';
require_once'../Model/ServiceDB.php';
if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
{
    extract($_POST);
    if(!empty($nom) && !empty($prenom)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($type) && !empty($description)) {
        $ok = addService($nom, $prenom,$tel,$adress,$email,$type,$description);

    }    header("location:../View/formService.php?resultat=$ok");
}
if(isset($_GET['id']))
{
    $ok=deleteService($_GET['id']);
    header("location:../View/ListeService.php?result=$ok");
}
if(isset($_POST['edit'])){
    // var_dump($_POST);
    extract($_POST);
    if(!empty($id) && !empty($nom) && !empty($prenom)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($type)&& !empty($description)) {
        $ok = updateService($id, $nom, $prenom, $tel, $adress, $email, $type, $description);
        header("location:../View/ListeService.php?result=$ok");
    }
}
?>