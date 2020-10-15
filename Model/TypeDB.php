<?php
function addType($libtyp)
{
    $sql ="INSERT INTO typreg VALUES (NULL,'$libtyp')";
    return executeSQL($sql);
}
function listeType()
{
    $sql =" SELECT * FROM typreg";
    return executeSQL($sql);
}
?>