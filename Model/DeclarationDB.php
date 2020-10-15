<?php
function  addDeclaration($nom, $prenom,$tel,$adress,$email,$info,$pic){
    $sql = "INSERT INTO declaration VALUES(null, '$nom', '$prenom','$tel','$adress','$email','$info','$pic')";
    return executeSQL($sql);
}
function deleteDeclaration($id){
    $sql = "DELETE FROM declaration WHERE ID = $id ";return executeSQL($sql);
}
function updateDeclaration($id, $nom, $prenom,$tel,$adress,$email,$info,$pic){
$sql = "UPDATE declaration SET nom = '$nom',
						prenom = '$prenom',
						tel = '$tel',
						adress = '$adress',
						email = '$email',
						info = '$info',
						pic = '$pic'
						WHERE id = $id";
    return executeSQL($sql);
}
function listeDeclaration(){
    $sql = "SELECT * FROM declaration";
}


?>