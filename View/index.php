<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>page d'accueil</title>
    <!-- l'appel de {$url_base} vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap-cerulean.min.css"/>
    <link type="text/css" rel="stylesheet" href="../css/samane.css"/>
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="../css/b.css"/>
    <!-- integration de javascript dans le moteur de rendu de vue Smarty -->

</head>

<body onload="load_design()">
<form>
    <table>
        <tr><td><a href="FormAdmin.php"  style="width: 300px">INSCRIPTION</a></td></tr>
    </table>
</form>
<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:160px;">
    <div class="panel panel-info">
        <div class="panel-heading">BIENVENUE SUR LE SITE  WEURIKO

        </div>
        <div class="panel-body">

            <div class="alert alert-success" style="font-size:18px; text-align:justify;">

                <div class="container">
                    <form class="form-horizontal" action="../Accueil.php">

                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <h2>Formulaire de connexion</h2>
                                <br>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group has-danger">
                                    <label class="sr-only" for="login">Nom d'Utilisateur</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                                        <input type="text" name="login" class="form-control" id="login"
                                               placeholder="Entrez votre login" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="sr-only" for="password">Mot de passe</label>
                                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                                        <input type="password" name="password" class="form-control" id="password"
                                               placeholder="Entrez votrer Mot de passe" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <!-- Put password error message here -->
                        </span>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 1rem">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success" name="connexion"><i class="fa fa-sign-in"></i> Connexion</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
</body>
</html>
