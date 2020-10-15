<?php
function addUser($nomU,$prenomU,$login,$password)
{
    $sql ="INSERT INTO user VALUES (NULL,'$nomU','$prenomU','$login','$password')";
    return executeSQL($sql);
}
function deleteUser($idU)
{
    $sql ="DELETE FROM user WHERE idU = $idU";
    return executeSQL($sql);
}
function getuser($login,$password)
{
    $sql =" SELECT * FROM user WHERE  login = '$login' AND password = '$password' ";
    return executeSQL($sql);
}
?>