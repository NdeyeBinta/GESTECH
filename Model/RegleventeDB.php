<?php
function addregvente($libRV ,$dateRV,$idv,$idcli,$idtyp,$mntRV,$idFV)
{
    $sql ="INSERT INTO reglevente VALUES (NULL,'$libRV','$dateRV','$idv','$idcli','$idtyp',$mntRV,$idFV)";
    return executeSQL($sql);
}
function updateReglvente($idRV,$libRV ,$dateRV,$idv,$idcli,$idtyp,$mntRV,$idFV)
{
    $sql =" UPDATE reglevente SET  libRV='$libRV',
                               dateRV='$dateRV',
                               idv='$idv',
                                idcli='$idcli',
                               idtyp='$idtyp',
                                mntRV='$mntRV',
                                idFV='$idFV',
                                WHERE  idRV  = $idRV";
    return executeSQL($sql);
}
function listeReglvente()
{
    $sql =" SELECT * FROM reglevente";
    return executeSQL($sql);
}
?>