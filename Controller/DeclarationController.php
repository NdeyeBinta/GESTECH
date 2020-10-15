<?php
require_once '../Model/DB.php';
require_once'../Model/DeclarationDB.php';
if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
{
    extract($_POST);
    if(!empty($_FILES)){
        $pic = $_FILES['pic']['name'];
        //$upload = "picture/".$pic;
        $upload = 'picture/'.$pic;
        move_uploaded_file($_FILES['pic']['tmp_name'],$upload);
        if(!empty($nom) && !empty($prenom)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($info) && !empty($pic)) {
            $ok = addDeclaration($nom, $prenom,$tel,$adress,$email,$info,$pic);

        }
    }   header("location:../View/formDeclaration.php?resultat=$ok");
}
if(isset($_GET['id']))
{
    $ok=deleteDeclaration($_GET['id']);
    header("location:../View/ListeDeclaration.php?result=$ok");
}
if(isset($_POST['edit'])){
    // var_dump($_POST);
    extract($_POST);
    extract($_POST);
    if(!empty($id) && !empty($nom) && !empty($prenom)&& !empty($tel)&& !empty($adress)&& !empty($email)&& !empty($info) && !empty($pic)) {
        $ok = updateDeclaration($nom, $prenom,$info,$tel,$adress,$email,$pic);
        header("location:../View/ListeDeclaration.php?result=$ok");
    }
}
?>