<?php
function addfact($dateFa,$libFa,$idv)
{
    $sql ="INSERT INTO facturea VALUES (NULL,'$dateFa','$libFa','$idv')";
    return executeSQL($sql);
}
function deletefact($idFa)
{
    $sql ="DELETE FROM facturea WHERE idFa = '$idFa'";
    return executeSQL($sql);
}
function updatefact($idFa,$dateFa,$libFa,$idv)
{
    $sql =" UPDATE facturea SET dateFa='$dateFa',
                                  libFa='$libFa',
                                   idv=$idv
                                WHERE  idFa = '$idFa'";
    return executeSQL($sql);
}
function listefacture()
{
    $sql =" SELECT * FROM facturea";
    return executeSQL($sql);
}
function getfact($idFa)
{
    $sql ="SELECT * FROM facture WHERE idFa='$idFa'";
    return executeSQL($sql);
}
?>