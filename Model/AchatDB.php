<?php
function addAchat($puach,$qteach,$idfour,$idprod,$mntA,$dateA)
{
    $sql = "INSERT INTO achatprod VALUES (NULL , '$puach','$qteach','$idfour','$idprod','$mntA','$dateA')";
    echo $sql;
    return executeSQL($sql);
}
function deleteAchat($idachat)
{
    $sql = "DELETE FROM achatprod WHERE idachat = $idachat";
    return executeSQL($sql);
}
function updateAchat($idachat,$puach,$qteach,$idfour,$idprod,$mntA,$dateA)
{
    $sql = "UPDATE achatprod SET puach= '$puach',
                                    qteach = '$qteach',
                                    idfour=$idfour,
                                    idprod=$idprod,
                                    mntA=$mntA,
                                    dateA=$dateA
                                    WHERE idachat = $idachat";
    return executeSQL($sql);
}
function listeAchat()
{
    $sql = "SELECT * FROM achatprod";
    return executeSQL($sql);
}
function getAchatById($idachat)
{
    $sql = "SELECT * FROM achatprod WHERE idachat = $idachat";
    return executeSQL($sql);
}
//liste des serveurs qui n'ont pas de service
function getAchatNotAchat()
{
    $sql = "SELECT * FROM achatprod
                      WHERE idachat NOT IN (SELECT s.idachat
                                                FROM achatprod s,ventepro v
                                                WHERE  s.idachat = s.idachat)";
    return executeSQL($sql);
}
?>