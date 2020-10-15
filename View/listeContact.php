<html>
<head>
    <meta charset="UTF-8">
    <title>page liste</title>
    <!-- l'appel de {$url_base} vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap-cerulean.min.css"/>
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="../css/samane.css"/>


    <style>
        h1{
            color: #40007d;
        }
    </style>
</head>
<body>
<div class="nav navbar navbar-default navbar-fixed-top">
    <ul class="nav navbar-nav">
        <!-- l'appel de {$url_base} vous permet de recupérer le chemin de votre site web  -->
        <li><a href="formDeclaration.php">Declaration</a></li>
        <li><a href="listeService.php">service</a></li>
        <li><a href="listeContact.php">Contact</a></li>
    </ul>
</div>
<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:10px;">
    <div class="panel panel-info">
        <div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
        <div class="panel-body">
            <table class="table table-bordered table-stripped">
                <tr>
                    <th>Identifiant</th>
                    <th>Nom</th>
                    <th>Prenom </th>
                    <th>Tel</th>
                    <th>Adress</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                <?php
                require_once "../Model/DB.php";
                require_once "../Model/ContactDB.php";
                $list= listeContact();
                while($row=mysqli_fetch_row($list))
                {
                    echo"<tr>
                                <td>$row[0]</td>
                                <td>$row[1]</td>
                                <td>$row[2]</td>
                                <td>$row[3]</td>
                                <td>$row[4]</td>
                                <td>$row[5]</td>
                                <td>$row[6]</td>
                                 <td><a href='../View/EditContact.php?id=$row[0]&n=$row[1]&c=$row[2] &ty=$row[3]&a=$row[4]&t=$row[5]'>edit</a> </td>
                                 <td><a href='../Controller/ContactController.php?id=$row[0]' onclick='javascript:return confirmation();'> SUPPRIMER</a></td>
                             </tr>";
                }
                ?>
            </table>

        </div>
        <a href="formContact.php">Ajout d'un Contact</a>
    </div>
</div>

</body>
</html>
