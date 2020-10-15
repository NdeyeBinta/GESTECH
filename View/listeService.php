<html>
<head>
    <meta charset="UTF-8">
    <title>page get id</title>
    <!-- l'appel de {$url_base} vous permet de recupérer le chemin de votre site web  -->
    <link type="text/css" rel="stylesheet" href="../css/bootstrap-cerulean.min.css"/>
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="../css/samane.css"/>

    <link type="text/css" rel="stylesheet" href="../css/style.css"/>

    <style>
        h1{
            color: #40007d;
        }
    </style>
    <script type="text/javascript" src="../js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <script type="text/javascript" src="../js/cufon-yui.js"></script>
    <script type="text/javascript" src="../js/arial.js"></script>
    <script type="text/javascript" src="../js/cuf_run.js"></script>

    <style>
        .td{

            text-decoration-color:#9a161a;
            color: red;


        }
        .td1{

            text-decoration-color:#9a161a;
            color:green;
            border-width: medium;
            background-size: 200px;

        }
        .t{

            text-decoration-color:#9a161a;
            color: red;
            width: 100px;
            font-size: large;


        }
        .slideshow {

            width: 280px;

            height: 280px;

            overflow: hidden;

            border: 3px solid #F2F2F2;

        }

        .slideshow ul {

            /* 3 images donc 4 x 100% */

            width: 280%;

            height: 280px;

            padding:0; margin:0;

            list-style: none;

        }

        .slideshow li {

            float: left;

        }

    </style>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/imag.js"></script>

</head>
<body >
<!-- START PAGE SOURCE -->
<?php
if (isset($_GET['result']))
{
    if($_GET['result']==1)
    {
        echo" <div class='alert alert-success'> Donner ajouter</div>";
    }else
    {
        echo" <div class='alert alert-warning'> ERREUR DE CODE</div>";
    }
}
?>
<div class="main" >
    <div class="main_resize">
        <div class="header">
            <div class="menu_nav">
                <img src="../imgpro/CaptureW.PNG" align="left"   width="100" height=50" alt="" />
                <ul>

                    <li class="active" class="td1"><a href="../Accueil.php">Accueil</a></li>
                    <li class="td1"><a href="formDeclaration.php">Publier une declaration</a></li>
                    <li class="td1" ><a href="listetrouver.php">Trouver mon objet</a></li>
                    <li class="td1" ><a href="listeService.php">Service</a></li>
                    <li class="td1"><a href="formContact.php">Contact</a></li>
                </ul>
                <div class="clr"></div>
            </div>
            <div class="hbg">
                <h2 class="t"><span>Service</span></h2>
            </div>
        </div>
        <div class="content">

            <div class="content_bg">
                <div class="mainbar">
                    <div class="article">
                        <h2 class="t"><span> NOS SERVICE </span></h2>
                        <div class=class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:10px;">
                            <div class="panel panel-info">
                                <div class="panel-heading">LISTE SERVICE</div>
                                <div class="panel-body">
                                    <table class="table table-bordered table-stripped">
                                        <tr>
                                            <th>Type</th>
                                            <th>Nom</th>
                                            <th>Prenom </th>
                                            <th>Tel</th>
                                            <th>Adress</th>
                                            <th>Description</th>

                                        </tr>
                                                <?php
                                                    require_once "../Model/DB.php";
                                                    require_once "../Model/ServiceDB.php";
                                                    $list= listeService();
                                                    while($row=mysqli_fetch_row($list))
                                                    {
                                                        echo"<tr>
                                                         
                                                                <td>$row[1]</td>
                                                                <td>$row[2]</td>
                                                                <td>$row[3]</td>
                                                                <td>$row[4]</td>
                                                                <td>$row[5]</td>
                                                                <td>$row[6]</td>
                                                        </tr>";
                                                    }
                                                ?>
                                    </table>
                                </div>
                                <a href="formService.php">Retour </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar">
                <div class="gadget">
                    <p style="text-decoration-color:red"  class="td">SELECTIONNEZ UNE  CATEGORIE</p>
                    <div class="search">
                        <form method="get" id="search" action="#">
                                <span>
								<select name="matiere" id="matiere" class="form-control">
									<option value="">faite un choix</option>
									<option value="PHP">Piece d'identite</option>
									<option value="JAVA">Passports</option>
									<option value="C#">Permis de conduire</option>
									<option value="JavaScript">Telephones</option>
									<option value="HTML">Ordinateurs</option>
									<option value="AngularJS">Diplomes</option>
									<option value="AngularJS">Livres</option>
									<option value="AngularJS">Autres</option>
								</select>
                                <input name="searchsubmit" type="image" src="../imgpro/search.gif" value="Go" id="searchsubmit" class="btn"  />
                                </span>
                        </form>
                        <div class="clr"></div>
                    </div>
                    <div class="clr"></div>
                </div>

                <div class="gadget">
                    <p style="text-decoration-color:red"  class="td">ARTICLE RECENTS</p>
                    <div class="slideshow">
                        <ul>

                            <li><img src="../imgpro/coif.jpg" alt="" width="300" height="300" /></li>
                            <li><img src="../imgpro/men.jpg" alt="" width="300" height="300" /></li>
                            <li><img src="../imgpro/dem.jpg" alt="" width="300" height="300" /></li>
                            <li><img src="../imgpro/ele.jpg" alt="" width="300" height="300" /></li>
                            <li><img src="../imgpro/meu.jpg" alt="" width="300" height="300" /></li>
                            <li><img src="../imgpro/inf.jpg" alt="" width="300" height="300" /></li>
                            <li><img src="../imgpro/cle.jpg" alt="" width="300" height="300" /></li>
                            <li><img src="../imgpro/sac.jpeg" alt="" width="300" height="300" /></li>
                            <li><img src="../imgpro/tel.jpg" alt="" width="300" height="300" /></li>
                            <li><img src="../imgpro/jar.jpg" alt="" width="300" height="300" /></li>
                            <li><img src="../imgpro/plo.jpg" alt="" width="300" height="300" /></li>
                            <li><img src="../imgpro/gard.jpg" alt="" width="300" height="300" /></li>
                        </ul>
                    </div>

                </div>
                <div class="gadget">
                    <p style="text-decoration-color:red"  class="td">info plus</p>
                    <div class="clr"></div>
                    <div class="testi">
                        <ul class="ex_menu">
                            <li><a href="../index.php">Connexion</a></li>
                            <li><a href="#">Plus RSS des article </a> </li>
                            <li><a href="#">RSS Images</a> </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>

</div>

</div>
<!-- END PAGE SOURCE -->
</body>
</html>