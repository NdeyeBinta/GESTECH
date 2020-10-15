<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap-cerulean.min.css">
<body>
<div>
    <marquee><b class="panel panel-warning" class="60px"></b></marquee>
</div>
<div class="container spacer col-md-6 col-lg-6 col-sm-12 col-xs-12 col-md-offset-3 col-lg-offset-3"/>
<div class="panel panel-primary">
    <div class="panel-heading">formulaire de connexion pour administrateur</div>
    <div class="panel-body">
        <form  action="../Acceuil1.php">
            <div class="form-group">
                <label class="control-label">login</label>
                <input type="text" name="login" id="login" class="form-control">
            </div>
            <div class="form-group">
                <label class="control-label">password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" name="connecter" id="connecter" value="connecter" class="btn btn-success"/>
                <input type="submit" name="annuler" id="annuler" value="annuler" class="btn btn-danger"/>
            </div>
        </form>
    </div>
</div>
</body>
</html>