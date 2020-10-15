<?php
function addFour($nomfour,$prenofour,$raisonfour,$adrfour,$telfour)
{
    $sql = "INSERT INTO fournisseur VALUES (NULL , '$nomfour','$prenofour','$raisonfour','$adrfour','$telfour')";
    return executeSQL($sql);
}
function deleteFour($idfour)
{
    $sql = "DELETE FROM fournisseur WHERE idfour = $idfour";
    return executeSQL($sql);
}
function updateFour( $idfour,$nomfour,$prenofour,$raisonfour,$adrfour,$telfour)
{
    $sql = "UPDATE fournisseur SET nomfour = '$nomfour',
                                  prenofour = '$prenofour',
                                  raisonfour='$raisonfour',
                                  adrfour='$adrfour',
                                  telfour='$telfour'
                                    WHERE idfour = $idfour";
    return executeSQL($sql);
}
function listeFour()
{
    $sql = "SELECT * FROM fournisseur";
    return executeSQL($sql);
}
function nofour()
{
    $sql = "SELECT nomfour FROM fournisseur";
    return executeSQL($sql);
}
function getFourById($idfour)
{
    $sql = "SELECT * FROM fournisseur WHERE idcli = $idfour";
    return executeSQL($sql);
}
//liste des serveurs qui n'ont pas de service
/*function getServeurNotService()
{
    $sql = "SELECT * FROM serveur
                      WHERE idserv NOT IN (SELECT s.idserv
                                                FROM service s,serveur serv
                                                WHERE  s.idserv = serv.idserv)";
    return executeSQL($sql);
}*/
?>
{