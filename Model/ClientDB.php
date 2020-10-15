<?php
function addClient($nomcli,$prenomcli,$raisoncli,$adrcli,$telcli)
{
    $sql = "INSERT INTO client VALUES (NULL , '$nomcli','$prenomcli','$raisoncli','$adrcli','$telcli')";
    return executeSQL($sql);
}
function deleteClient($idcli)
{
    $sql = "DELETE FROM client WHERE idcli = $idcli";
    return executeSQL($sql);
}
function updateClient($idcli,$nomcli,$prenomcli,$raisoncli,$adrcli,$telci)
{
    $sql = "UPDATE client SET nomcli = '$nomcli',
                                  prenomcli = '$prenomcli',
                                  raisoncli='$raisoncli',
                                  adrcli='$adrcli',
                                  telcli='$telci'
                                    WHERE idcli = $idcli";
    return executeSQL($sql);
}
function listeClient()
{
    $sql = "SELECT * FROM client";
    return executeSQL($sql);
}
function nocli()
{
    $sql = "SELECT nomcli FROM client";
    return executeSQL($sql);
}
function getClientById($idcli)
{
    $sql = "SELECT * FROM client WHERE idcli = $idcli";
    return executeSQL($sql);
}
?>