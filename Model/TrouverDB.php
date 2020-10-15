<?php
function addTrouver($titre, $categorie,$info,$tel,$adress,$email,$pic){

    $sql = "INSERT INTO trouver VALUES(null, '$titre', '$categorie','$info','$tel','$adress','$email','$pic')";
    return executeSQL($sql);
}
function deleteTrouver($id){
    $sql = "DELETE FROM trouver WHERE ID = $id ";
    return executeSQL($sql);
}
function updateTrouver($id, $titre, $categorie,$info,$tel,$adress,$email,$pic){
    $sql = "UPDATE trouver SET titre = '$titre',
						categorie = '$categorie',
						info = '$info',
						tel = '$tel',
						adress = '$adress',
						email = '$email',
						pic = '$pic'
						WHERE id = $id";
    return executeSQL($sql);
}
function listeTrouver(){
    $sql = "SELECT * FROM trouver";

    return executeSQL($sql);
}


?>