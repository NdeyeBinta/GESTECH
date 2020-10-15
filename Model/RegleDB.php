<?php
function addregachat($libRA ,$dateRA,$idachat,$idfour,$idtyp,$mntRA,$idFa)
{
    $sql ="INSERT INTO reglachat VALUES (NULL,'$libRA','$dateRA','$idachat','$idfour','$idtyp',$mntRA,'$idFa')";
    return executeSQL($sql);
}
function updateReglachat($idRA,$libRA ,$dateRA,$idachat,$idfour,$idtyp,$mntRA,$idFa)
{
    $sql =" UPDATE reglachat SET  libRA='$libRA',
                               dateRA='$dateRA',
                               idachat='$idachat',
                                idfour='$idfour',
                               idtyp='$idtyp',
                                mntRA='$mntRA',
                                idFa=$idFa
                                WHERE  idRA  = $idRA";
    return executeSQL($sql);
}
function listeReglachat()
{
    $sql =" SELECT * FROM reglachat";
    return executeSQL($sql);
}
?>