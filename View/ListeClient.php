<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LISTE CLIENT</title>
    <link rel="stylesheet" href="../css/bootstrap-cerulean.min.css"/>
    <script type="text/javascript" language="JavaScript" src="../js/script.js">

    </script>
</head>
<body>
<a href="FormClient.php">NOUVEAU CLIENT</a>
<div class="container">
    <div class="panel panel-warning">
        <div class="page-header">LISTE DES CLIENT</div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <td>IDENTITE</td>
                    <td>NOM DU CLIENT</td>
                    <td>PRENOM DU CLIENT</td>
                    <td>RAISON DU CLIENT</td>
                    <td>ADRESS DU CLIENT</td>
                    <td>TELEPHONE DU CLIENT</td>
                    <td>ACTION</td>
                    <td>ACTION</td>
                </tr>
                <?php
                require_once "../Model/DB.php";
                require_once "../Model/ContactDB.php";
                $list= listeClient();
                while($row=mysqli_fetch_row($list))
                {
                    echo"<tr>
                                <td>$row[0]</td>
                                <td>$row[1]</td>
                                <td>$row[2]</td>
                                <td>$row[3]</td>
                                <td>$row[4]</td>
                                <td>$row[5]</td>
                                 <td><a href='../View/EditClient.php?id=$row[0]&n=$row[1]&c=$row[2] &ty=$row[3]&a=$row[4]&t=$row[5]'>edit</a> </td>
                                 <td><a href='../Controller/ClientController.php?id=$row[0]' onclick='javascript:return confirmation();'> SUPPRIMER</a></td>
                             </tr>";
                }
                ?>
            </table>
        </div>
    </div>
    <div class="col-md-3">
        <a href="../Acha.php" class="btn btn-primary" style="width: 200px">ACCUEIL</a>
    </div>
</div>
</body>
</html>