<?php
function addService($nom, $prenom,$tel,$adress,$email,$type,$description){
    $sql = "INSERT INTO service VALUES(null, '$nom', '$prenom','$tel','$adress','$email','$type','$description')";
    return executeSQL($sql);
}
function deleteService($id)
{
    $sql = "DELETE FROM service WHERE ID = $id ";
    return executeSQL($sql);
}
function updateService($id, $nom, $prenom,$tel,$adress,$email,$type,$description){
    $sql = "UPDATE service SET nom = '$nom',
						prenom = '$prenom',
						tel = '$tel',
						adress = '$adress',
						email = '$email',
						type = '$type',
						description = '$description'
						WHERE id = $id";
    return executeSQL($sql);
}
function listeService()
{
    $sql = "SELECT * FROM service";
    return executeSQL($sql);
}


?>