<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'ajout des Administrateurs</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-cerulean.min.css">
    <link type="text/css" rel="stylesheet" href="../css/samane.css"/>
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="../css/b.css"/>
</head>
<body>
<?php
if(isset($_GET['resultat']))
{
    if($_GET['resultat']==1)
    {
        echo "<div class='alert alert-success'>l'utilisateur a été ajouté avec succes</div>";
    }
    else
    {
        echo "<div class='alert alert-warning'>error</div>";

    }
}
?>
<div class="container spacer col-md-6 col-lg-6 col-sm-12 col-xs-12 col-md-offset-3 col-lg-offset-3"/>
<div class="panel panel-primary">
    <div class="panel-heading">formulaire d'ajout d'utilisateurs</div>
    <div class="panel-body">
        <form method="post" action="../Controller/AdminController.php">
            <div class="form-group">
                <label class="control-label">Nom de l'utilisateur</label>
                <input type="text" name="nomU" id="nomU" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label">prenom de l'utilisateur</label>
                <input type="text" name="prenomU" id="prenomU" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label">login de l'utilisateur</label>
                <input type="text" name="login" id="login" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label">mot de passe de l'utilisateur</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="valider" id="valider" value="valider" class="btn btn-success"/>
                <input type="submit" name="annuler" id="annuler" value="annuler" class="btn btn-danger"/>
            </div>
        </form>
    </div>
    <div class="col-md-3">
        <a href="../index.php" class="btn btn-primary" style="width: 200px">ACCUEIL</a>
    </div>
</div>
</body>
</html>