<?php
function getconnexion()
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "gestionstock";
    $con = mysqli_connect($host,
        $user,
        $password,
        $dbname);
    return $con;
}
function executeSQL($sql)
{
    $con=getconnexion();
    $exec=mysqli_query($con,$sql) or die (mysqli_error($con));
    return $exec;
}
?>