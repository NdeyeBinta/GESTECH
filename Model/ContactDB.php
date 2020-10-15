<?php
function addContact($nom, $prenom,$tel,$adress,$email,$message){
    $sql = "INSERT INTO contact VALUES(null, '$nom', '$prenom','$tel','$adress','$email','$message')";
    return executeSQL($sql);
}
function deleteContact($id)
{
    $sql = "DELETE FROM contact WHERE ID = $id ";
    return executeSQL($sql);
}
function updateContact($id, $nom, $prenom,$tel,$adress,$email,$message){
    $sql = "UPDATE contact SET nom = '$nom',
						prenom = '$prenom',
						tel = '$tel',
						adress = '$adress',
						email = '$email',
						message = '$message'
						WHERE id = $id";
    return executeSQL($sql);
}
function listeContact()
{
    $sql = "SELECT * FROM contact";
    return executeSQL($sql);
}


?>