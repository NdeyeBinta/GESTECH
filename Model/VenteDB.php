<?php
function addVente($puv,$qtev,$idcli,$idprod,$mntV,$dateV)
{
    $sql = "INSERT INTO ventepro VALUES (NULL ,$puv,$qtev,$idcli,$idprod,$mntV,'$dateV')";
   // echo $sql;
    return executeSQL($sql);
}
function deleteVente($idv)
{
    $sql = "DELETE FROM ventepro WHERE idv = $idv";
    return executeSQL($sql);
}
function updateAchat($idv,$puv,$qtev,$idcli,$idprod,$mntV,$dateV)
{
    $sql = "UPDATE ventepro SET puv= '$puv',
                                    qtev = '$qtev',
                                    idcli='$idcli',
                                    idprod='$idprod',
                                    mntV=$mntV,
                                    dateV=$dateV
                                    WHERE idv = '$idv'";
    return executeSQL($sql);
}
function listeVente()
{
    $sql = "SELECT * FROM ventepro";
    return executeSQL($sql);
}
function getVenteById($idv)
{
    $sql = "SELECT * FROM ventepro WHERE idv = $idv";
    return executeSQL($sql);
}
//liste des serveurs qui n'ont pas de service
function getVenteNotVente()
{
    $sql = "SELECT * FROM ventepro
                      WHERE idv NOT IN (SELECT s.idv
                                                FROM ventepro s,achatprod ac
                                                WHERE  s.idv = s.idv)";
    return executeSQL($sql);
}
?>