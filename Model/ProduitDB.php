<?php
function addProduit($designpro,$qtestock,$refeprod)
{
    $sql = "INSERT INTO produit VALUES (NULL , '$designpro','$qtestock','$refeprod')";
    return executeSQL($sql);
}
function deleteProduit($idprod)
{
    $sql = "DELETE FROM produit WHERE idprod = $idprod";
    return executeSQL($sql);
}
function updateProduit($idprod,$designpro,$qtestock,$refeprod)
{
    $sql = "UPDATE produit SET designpro = '$designpro',
                                  qtestock = $qtestock,
                                  refeprod='$refeprod'
                                    WHERE idprod = $idprod ";
    return executeSQL($sql);
}
function listeProduit()
{
    $sql = "SELECT * FROM produit";
    return executeSQL($sql);
}

function getProduitById($idprod)
{
    $sql = "SELECT * FROM produit WHERE idprod = $idprod";
    return executeSQL($sql);
}

?>