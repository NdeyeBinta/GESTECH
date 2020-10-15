<?php
require_once '../Model/DB.php';
require_once'../Model/TrouverDB.php';
if(isset($_POST['valider']))//'valider' est le name du champs submit du formulaire add.html
{
    extract($_POST);
    if(!empty($_FILES)){
        $pic = $_FILES['pic']['name'];
        //$upload = "picture/".$pic;
        $upload = 'picture/'.$pic;
        move_uploaded_file($_FILES['pic']['tmp_name'],$upload);
        if(!empty($titre) && !empty($categorie)&& !empty($info)&& !empty($tel)&& !empty($adress)&& !empty($email) && !empty($pic)) {
            $ok = addTrouver($titre, $categorie,$info,$tel,$adress,$email,$pic);
            $data['ok'] = $ok;
        }
    }   header("location:../View/formTrouver.php?resultat=$ok");
}
if(isset($_GET['id']))
{
    $ok=deleteTrouver($_GET['id']);
    header("location:../View/ListeTrouver.php?result=$ok");
}
if(isset($_POST['edit'])){
    // var_dump($_POST);

    extract($_POST);
    if(!empty($id) && !empty($titre) && !empty($categorie)&& !empty($info)&& !empty($tel)&& !empty($adress)&& !empty($email) && !empty($pic)) {
        $ok = updateTrouver($titre, $categorie,$info,$tel,$adress,$email,$pic);
        header("location:../View/ListeTrouver.php?result=$ok");
    }
}
?>