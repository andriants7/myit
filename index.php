<!doctype html>
<html class="no-js" lang="" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logoflavicon.JPG">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/bootstrap/bootstrapcrerulian.css"/>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.min.css">

</head>
<!--
body scroll spy

-->
<body data-spy="scroll" data-target=".navbar">
<?php
        require_once 'page/connexion.php';
        require 'page/devisAppli.php';
        require 'page/devisSite.php';
?>

            <div id="acceuil" class="row" >
               <!--
                BARRE NAVIGATION
                -->

                            <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
                                <div class="container">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <a class="navbar-brand" href="#"><img src="img/logo4.jpg" height="30" WIDTH="60" id="logo" alt="myitbox Projct"/></a>
                                        <a class="navbar-brand" href="#">My IT Box</a>
                                    </div>
                                    <div id="navbar row" class="collapse navbar-collapse">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="#acceuil"><span class="fa fa-home"></span> Acceuil</a></li>
                                            <li ><a href="#gamme"><span class="fa fa-phone"></span> Gamme de produits</a></li>
                                            <li><a href="#equipe"><span class="fa fa-inbox"></span>  Notre equipe</a></li>

                                        </ul>


                                            <button  class="btn btn-primary btn-sm navbar-btn" data-toggle="modal" data-target="#rejoin"><span class="fa fa-2x fa-calculator"></span> Effectuez un devis</button>


                                        <button class="btn btn-primary btn-sm pull-right navbar-btn " data-toggle="modal" data-target="#myModal">
                                            <span class="fa fa-2x fa-inbox"></span> Rejoignez-nous
                                        </button>



                                    </div><!--/.nav-collapse -->
                                </div>
                            </nav>
                <!--
                PREMIER PAGE

                -->
                <div  class="flexslider">

                    <ul class="slides">
                        <li>


                                <div class="texteAcceuil">
                                    <h1 class="wow fadeInDown" data-wow-delay="4000"><span class="fa fa-cubes"></span>My ITBox</h1>
                                    <h2 class="wow fadeInDown" data-wow-delay="4000">
                                        <span class="rotate">L'evolution numérique n'est pas faite pour vous? Trop chère, trop compliqué, trop long</span>
                                    </h2><br/><br/>

                                    <a href="#mission" class="smoothScroll btn btn-lg btn-info wow fadeInDown" data-wow-delay="5000">Qui nous sommes</a>
                                </div>

                        </li>
                        <li>


                                <div class="texteAcceuil">
                                    <h1 class="wow fadeInDown" data-wow-delay="4000"><span class="fa fa-mobile-phone"></span> Android </h1>
                                    <h2 class="wow fadeInDown" data-wow-delay="4000">
                                        <span class="rotate">Des applications android , iOS également, et multi plateformes</span>
                                    </h2><br/><br/>

                                    <a href="#gamme" class="smoothScroll btn btn-lg btn-info wow fadeInDown" data-wow-delay="5000">Notres produits</a>
                                </div>

                        </li>
                        <li>

                                <div class="texteAcceuil">
                                    <h1 class="wow fadeInDown" data-wow-delay="4000"><span class="fa fa-laptop"></span>REALISATION</h1>
                                    <h2 class="wow fadeInDown" data-wow-delay="4000">
                                        <span class="rotate">Nous aidons à realiser votre propre boite suivant vos besoins, site all in one page</span>
                                    </h2><br/><br/>

                                    <a href="#equipe" class="smoothScroll btn btn-lg btn-info wow fadeInDown" data-wow-delay="5000">Contacter</a>
                                </div>

                        </li>
                    </ul>
                </div>


            </div>
<!--

UN peu plus


-->
        <section id="mission">
            <div class="container">
                <div class="row">
                    <div class="text-center col-md-12 wow fadeInDown" data-wow-delay="4000">
                        <h3>My IT Box</h3>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-8 text-center">
                        <p>L'evolution numérique n'est pas faite pour vous? Trop chère, trop compliqué, trop long</p>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-cog pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">REALISATION</h4>
                                <p>Nous aidons à realiser votre propre boite suivant vos besoins</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInDown" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-globe pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">BOITE</h4>
                                <p>Boîtes faites sur mésures</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInRight" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-desktop pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">NOUVEAUTES</h4>
                                <p>Nous mettons à votre service les dernières nouveautés en matières de IT</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInLeft" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-heart pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">PRIX ABORDABLE</h4>
                                <p>Le tout à un prix defiant toute concurrence et avec flexibilité</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInDown" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-laptop pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">TECHNOLOGIES</h4>
                                <p>Les dernières technologies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 wow fadeInRight" data-wow-delay="4000">
                        <div class="media">
                            <i class="fa fa-envelope pull-left media-object"></i>
                            <div class="media-body">
                                <h4 class="media-heading">EQUIPES</h4>
                                <p>Equipe jeune et talentueuse</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--

GAMME DE PRODUITS

-->
            <div id="gamme" >
                <div class="row">
                    <div class="row col-lg-10 col-lg-offset-1">
                    <div class="jumbotron col-lg-6 wow fadeInDown"  id="gammeContent">
                        <section class="feature2">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                        <img src="img/ipadair.png" class="img-responsive" alt="tablette">
                                    </div>
                                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                        <h2 class="text-uppercase">Applications mobiles</h2>
                                        <ul class="list-group">
                                            <li class="list-group-item" id="PME" data-toggle="popover" data-html="true" data-content="<ul><li>Application mobile pour gérer le stock</li><li>Gestion des horaires du personnel</li><li>Formulaires clients</li></ul>! " title="Pour les PME" ><span class="fa fa-suitcase"></span>  Petites et Moyennes Entreprises</li>
                                            <li class="list-group-item"  id="restaurant" data-toggle="popover" data-html="true" data-content="<ul><li>Carte des menus</li><li>Présentation des offres</li><li>Autres</li></ul>! " title="Pour les Restaurants"><span class="fa fa-bars"></span>  Restaurans, Bars</li>
                                            <li class="list-group-item" id="evenement" data-toggle="popover" data-html="true" data-content="<ul><li>Guide</li><li>Applications ludiques</li><li>jeux et etc</li></ul>! " title="Pour l'évenementiels"><span class="fa fa-calendar"></span>  Evenementiels</li>
                                            <li class="list-group-item"><span class="fa fa-camera"></span>  Autre</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="jumbotron col-lg-5">

                            <section class="feature2">
                                <div class="container" id="internet" data-toggle="popover" data-html="true" data-content="<ul><li>Design épuré:WordPress</li><li>Création de Template</li><li>Site internet avec application lourde</li></ul>! " title="Site Internet">
                                    <div class="row">
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                            <img src="img/ordi.png" class="img-responsive" alt="ordinateur">
                                        </div>
                                        <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                                            <h2 class="text-uppercase">Site à la pointe de la nouveauté</h2>
                                            <p><span class="fa fa-pencil"></span> ameliorons votre image de marque</p>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
            </div>

<!--
NOTRE EQUIPE


-->
            <div id="equipe">
                <div class="row">
                    <div class="jumbotron col-lg-6 col-lg-offset-1 " id="equipeContent">

                        <img CLASS="lequipe" src="img/terrain.jpg" alt="l'equipe"/>

                    </div>
                    <div class="col-lg-3 col-lg-offset-1" id="contact">
                        <form class="form-horizontal col-lg-12">
                            <div class="form-group">
                                <legend>E-mail</legend>

                            <div class="row">
                                <div class="form-group ">
                                    <label for="text" class="col-lg-2 col-lg-offset-1 ">Nom </label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="texta">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group ">
                                    <label for="text" class="col-lg-2 col-lg-offset-1 ">Email </label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="text"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="textarea" class="col-lg-2 col-lg-offset-1">Comment: </label>
                                    <div height="300px" class="col-lg-8">
                                        <textarea   class="form-control pull-right" id="textarea"></textarea>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-sm btn-success col-lg-offset-7" value="envoyer"/>


                            </div>

                    </div>
                    </form>
                        <div class="row" id="sociauBouton" >
                            <a href="http://www.facebook.com/myitbox"> <img src="img/reseaux/facebook.png"/></a>
                            <a href="http://www.twitter.com" ><img src="img/reseaux/twitter.png"/></a>
                            <a href="http://mail.google.com"> <img src="img/reseaux/email.png"/></a>
                            <a href="http://linkedin.com"><img src="img/reseaux/linkedin.png"/></a>
                    </div>
                </div>


            </div>
            </div>
<!--



Nous rejoindre MODAL



-->
                <div id="myModal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog ">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Nous rejoindre</h4>
                            </div>
                            <form class="form-horizontal col-lg-12" >
                            <div class="modal-body">

                                    <div class="form-group">


                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Nom : </label>
                                                <div class="col-lg-8">
                                                    <input type="text" name="nom" class="form-control" id="nomRejoignez">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-2 col-lg-offset-1 ">Email : </label>
                                                <div class="col-lg-8">
                                                    <input type="text"name="email" class="form-control" id="emailRejoignez"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-2 col-lg-offset-1">Comment:</label>
                                                <div height="300px" class="col-lg-8">
                                                    <textarea   class="form-control" name="message" id="commentRejoignez"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">
                                    <table>
                                        <tr>
                                            <th>votre cv</th>
                                            <th>lettre de motivation</th>
                                            <th>Votres projets</th>
                                        </tr>
                                        <tr>
                                            <td><input type="file" id="cv" name="cv" /></td>
                                            <td> <input id="lm" name="lm" type="file" /></td>
                                            <td> <input type="file" id="projets" name="projets" /></td>
                                        </tr>
                                        </table>
                                    <div class="pull-right pied">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                        <button type="submit" class="btn btn-primary" data-dismiss="modal" id="envo">envoyer</button>
                                    </div>

                                        </div>

                                 </div>


                            </form>
                        </div>
                            <div class="modal-footer">


                            </div>

                            </div>
                        </div>
                    </div>
                </div>
           <!--



            Fenetre pour devi application mobile





            -->
                    <div id="devisAppli" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="devisAppliLabel">
                        <div class="modal-dialog ">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="devisAppliLabel">Devis <span class="fa fa-android"></span> Application Mobile </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-lg-3"> <span class="fa fa-mobile-phone fa-5x"id="imageAppli"></span> </div>
                                    <div class="col-lg-9">
                                    <div class="form  " >


                                                <div class="form-group" >
                                                    <div class="row">
                                                    <label for="secteur" class="col-lg-2">Secteur: </label>
                                                    <div class="col-lg-9 col-lg-offset-1">
                                                        <select class="col-lg-10" name="secteur " id="secteur">
                                                            <option value="<?php echo $tableau['industrie']?>
                                                            " selected="selected">Industrie</option>
                                                            <option value="<?php echo $tableau['immobilier']?>">Immobilier</option>
                                                            <option value="<?php echo $tableau['technologie']?>">Technologie</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>


                                            <div class="form-group ">
                                                <div class="row">
                                                    <label for="appareil" class="col-lg-2">Appareil: </label>
                                                    <div class="col-lg-8">
                                                    <div class="input-group col-lg-8 col-lg-offset-2 " id="appareil">

                                                        <div class="form-group">

                                                            <div class="">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <input type="checkbox"  name="tablette" id="tablette" value="<?php echo $tableau['tablette']?>">
                                                                    </span>
                                                                    <label class="form-control"  for="tablette" ><span class="fa fa-2x fa-tablet"></span> Tablette</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <input type="checkbox"  name="mobile" id="mobile" value="<?php echo $tableau['phone']?>">
                                                                    </span>
                                                                    <label class="form-control " for="mobile" ><span class="fa fa-2x fa-mobile-phone"></span> Mobile</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        </div>
                                                </div>
                                                <div class="form-group ">
                                                    <div class="row">
                                                    <label for="fonctionnalite" class="col-lg-2">Fonctionnalité: </label>
                                                        <div class="col-lg-8">
                                                    <div class="input-group col-lg-8 col-lg-offset-2" id="fonctionnalite">
                                                        <div class="form-group">
                                                            <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="vitrine"  id="vitrine" value="<?php echo $tableau['vitrine']?>">
                                                                </span>
                                                                <label class="form-control " width="70px"for="vitrine" >vitrine</label>
                                                            </div>
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="Photos"  id="Photos" value="<?php echo $tableau['photo']?>">
                                                                </span>
                                                                <label class="form-control " for="Photos" >Photos</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                    <label for="nombrePage" class="col-lg-2">Nombre: </label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group col-lg-8 col-lg-offset-2 " id="nombre">

                                                            <div class="form-group">


                                                                    <div class="input-group">
                                                                        <input type="hidden"  name="prixPage" id="prixPage" value="<?php echo $tableau['prixPage']?>">
                                                                    <input type="number"  name="tablette" id="nombrePage" value="3">
                                                                    <span class="input-group-addon">
                                                                       pages
                                                                    </span>
                                                                    </div>



                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="form-group ">
                                                        <div class="row">
                                                            <label for="nombres" class="col-lg-2">Nombre de pages: </label>
                                                            <div class="col-lg-8">
                                                    <div class="input-group col-lg-8 col-lg-offset-2" id="nombres">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="Interface"  id="Interface" value="<?php echo $tableau['interface']?>">
                                                            </span>
                                                                <label class="form-control " for="Interface" >Interface utilisateur</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="sons"  id="sons" value="<?php echo $tableau['son']?>">
                                                            </span>
                                                                <label class="form-control " for="sons">sons</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="connexion"  id="connexion" value="<?php echo $tableau['connexion']?>">
                                                                </span>
                                                                <label class="form-control" for="connexion">connexion via Email/Reseaux </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                </div>
                                            </div>
                                        </div>


                                        </div>

                                </div>

                                <div class="modal-footer">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group ">


                                                <label for="nombres2" class="col-lg-4 col-lg-offset-4">Prix de reference: </label>
                                                <div class="col-lg-t">
                                                    <div class="input-group col-lg-2 resulta pull-right">

                                                        <span class="input-group-addon">€</span>

                                                        <span class="input-group-addon btn btn-lg btn-success " id="resultat"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#concretisons">Concretisons votre projet</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                            </div>

            <!--



            Fenetre pour devi site innovant





            -->
            <div id="devisSite" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="devisSiteLabel">
                <div class="modal-dialog ">
                    <div class="modal-content">

                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="devisSiteLabel">Devis <span class="fa fa-wordpress"></span> APPLICATION WEB</h4>
                        </div>
                        <div class="modal-body row">


                            <div class="form  col-lg-9 col-lg-offset-3 ">


                                <div class="form-group">
                                    <div class="row">
                                        <label for="secteur2" class="col-lg-2">Secteur: </label>
                                        <div class="col-lg-9 col-lg-offset-1">
                                            <select class="col-lg-10" name="secteur2 " id="secteur2">
                                                <option value="<?php echo $tableau2['industrie']?>" selected="selected" id="option2">Industrie</option>
                                                <option value="<?php echo $tableau2['immobilier']?>">Immobilier</option>
                                                <option value="<?php echo $tableau2['technologie']?>">Technologie</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group ">
                                    <div class="row">
                                        <label for="appareil2" class="col-lg-2">Technologie: </label>
                                        <div class="col-lg-8">
                                            <div class="input-group col-lg-8 col-lg-offset-2 " id="appareil2">

                                                <div class="form-group">

                                                    <div class="">
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <input type="checkbox"  name="wordpress" id="wordpress" value="<?php echo $tableau2['wordpress']?>">
                                                                    </span>
                                                            <label class="form-control " for="wordpress" >Wordpress</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                                    <span class="input-group-addon">
                                                                    <input type="checkbox"  name="drupal" id="drupal" value="<?php echo $tableau2['drupal']?>">
                                                                    </span>
                                                            <label class="form-control " for="drupal" >Drupal</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <div class="row">
                                            <label for="fonctionnalite2" class="col-lg-2">Fonctionnalité: </label>
                                            <div class="col-lg-8">
                                                <div class="input-group col-lg-8 col-lg-offset-2" id="fonctionnalite2">
                                                    <div class="form-group">
                                                        <div class="">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="vitrine2"  id="vitrine2" value="<?php echo $tableau2['vitrine']?>">
                                                                </span>
                                                                <label class="form-control " width="70px"for="vitrine2" >vitrine</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="Backoffice"  id="Backoffice" value="<?php echo $tableau2['Backoffice']?>">
                                                                </span>
                                                            <label class="form-control" for="Backoffice" >Backoffice</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label for="nombrePage2" class="col-lg-2">Nombre: </label>
                                        <div class="col-lg-8">
                                            <div class="input-group col-lg-8 col-lg-offset-2 " id="nombre2">

                                                <div class="form-group">


                                                    <div class="input-group">
                                                        <input type="hidden"  name="prixPage2" id="prixPage2" value="<?php echo $tableau2['prixPage']?>">
                                                        <input type="number"  name="tablette2" id="nombrePage2" value="3">
                                                                    <span class="input-group-addon">
                                                                       pages
                                                                    </span>
                                                    </div>



                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <div class="row">
                                            <label for="nombres2" class="col-lg-2">Fonctionnalites: </label>
                                            <div class="col-lg-8">
                                                <div class="input-group col-lg-8 col-lg-offset-2" id="nombres2">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="Interface2" " id="compteUtilisateur" value="<?php echo $tableau2['compteUtilisateur']?>">
                                                            </span>
                                                            <label class="form-control " for="compteUtilisateur" >compte utilisateur</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="appliPersonnalise"  id="sons2" value="<?php echo $tableau2['appliPersonnalise']?>">
                                                            </span>
                                                            <label class="form-control" for="sons2">application Personnalise</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                                <span class="input-group-addon">
                                                                <input type="checkbox" name="connexion2"  id="connexion2" value="<?php echo $tableau2['connexion']?>">
                                                                </span>
                                                            <label class="form-control" for="connexion2">connexion via Email/Reseaux </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                        </div>
                                </div>
                            </div>



                        <div class="modal-footer">
                        <div class="row">
                            <div class="col-lg-8">
                            <div class="form-group ">


                                    <label for="nombres2" class="col-lg-4 col-lg-offset-4">Prix de reference: </label>
                                    <div class="col-lg-t">
                                        <div class="input-group col-lg-2 resulta pull-right">

                                            <span class="input-group-addon">€</span>

                                            <span class="input-group-addon btn btn-lg btn-success " id="resultat2"></span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <div class="col-lg-4">
                                <button type="button"  class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#concretisonsWeb">Concretisons votre projet</button>
                            </div>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>

            </div>
        <!--


        DEVIS


        -->

        <div id="rejoin" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="rejoinLabel">
            <div class="modal-dialog ">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="rejoinLabel">Formulaire de Devis</h4>
                    </div>
                    <div class="modal-body">



                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#"  data-toggle="modal" data-target="#devisAppli" data-dismiss="modal">
                                        <img src="img/ipadair.png" width="186" height="142" div="ipad"class="img-responsive col-lg-offset-3" alt="ordinateur">
                                        <h3><span class="fa fa-pencil"></span> Application mobile</h3>
                                        </a>

                                    </div>
                                    <div class="col-md-6">
                                        <a href="#"  data-toggle="modal" data-target="#devisSite" data-dismiss="modal">

                                        <img src="img/ordi.png" class="img-responsive" alt="ordinateur">
                                        <h3><span class="fa fa-pencil"></span> Application Web</h3>
                                            </a>
                                    </div>
                                </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>

                    </div>

                </div>
            </div>
        </div>
        <!--


        cONCRETISER APPLI


        -->


        <div id="concretisons" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="rejoinLabel">
            <div class="modal-dialog ">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="rejoinLabel">Concretisons votre projet</h4>
                    </div>
                    <div class="modal-body">



                        <div class="row">
                            <div class="col-md-4">
                                <a href="#"  data-toggle="modal" data-target="#devisAppli" data-dismiss="modal">
                                    <img src="img/ordi.png" class="img-responsive" alt="ordinateur">
                                    <h3><span class="fa fa-android"></span> Application mobile</h3>
                                </a>

                            </div>
                            <div class="col-md-7">
                                <form class="form-horizontal col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Fonctionnalités: </label>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="vitrineConc"  id="vitrineConc" value="oui">
                                                            </span>
                                                            <label class="form-control" for="vitrineConc">Vitrine</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="photosConc"  id="photosConc" value="oui">
                                                            </span>
                                                            <label class="form-control" for="photosConc">Photos</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="interfaceConc"  id="interfaceConc" value="oui">
                                                            </span>
                                                            <label class="form-control" for="interfaceConc">Interface utilisateur</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="connexionConc"  id="connexionConc" value="oui">
                                                            </span>
                                                            <label class="form-control" for="connexionConc">Connexion via Email</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-3 col-lg-offset-1">Bref descriptif:</label>
                                                <div height="300px" class="col-lg-7 col-lg-offset-1">
                                                    <textarea   class="form-control" id="brefConc"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Nom: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="text" class="form-control" id="nomConc"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Couriel: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="email" class="form-control" id="mailConc"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Telephone: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="text" class="form-control" id="telConc"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="button" id="validerConc" class="btn btn-primary" data-dismiss="modal">Valider</button>
                    </div>

                </div>
            </div>
        </div>


        <!--


        concretison web




        -->
        <div id="concretisonsWeb" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="rejoinLabel">
            <div class="modal-dialog ">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="rejoinLabel">Concretisons votre projet</h4>
                    </div>
                    <div class="modal-body">



                        <div class="row">
                            <div class="col-md-4">
                                <a href="#"  data-toggle="modal" data-target="#devisAppli" data-dismiss="modal">
                                    <img src="img/ordi.png" class="img-responsive" alt="ordinateur">
                                    <h3><span class="fa fa-wordpress"></span> votre Application web</h3>
                                </a>

                            </div>
                            <div class="col-md-7">
                                <form class="form-horizontal col-lg-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Fonctionnalités: </label>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="wordpressConcWeb"  id="wordpressConcWeb" value="oui">
                                                            </span>
                                                            <label class="form-control" for="wordpressConcWeb">Wordpress</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="drupalConcWeb"  id="drupalConcWeb" value="oui">
                                                            </span>
                                                            <label class="form-control" for="drupalConcWeb">Drupal</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="backofficeConcWeb"  id="backofficeConcWeb" value="oui">
                                                            </span>
                                                            <label class="form-control" for="backofficeConcWeb">Backoffice</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-lg-offset-1 pull-right">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                            <input type="checkbox" name="connexionConcWeb"  id="connexionConcWeb" value="oui">
                                                            </span>
                                                            <label class="form-control" for="connexionConcWeb">Connexion via Email</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="row">
                                            <div class="form-group">
                                                <label for="textarea" class="col-lg-3 col-lg-offset-1">Bref descriptif:</label>
                                                <div height="300px" class="col-lg-7 col-lg-offset-1">
                                                    <textarea   class="form-control" id="brefConcWeb"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Nom: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="text" class="form-control" id="nomConcWeb"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Couriel: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="email" class="form-control" id="mailConcWeb"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group ">
                                                <label for="text" class="col-lg-3 col-lg-offset-1 ">Telephone: </label>
                                                <div class="col-lg-7 col-lg-offset-1">
                                                    <input type="text" class="form-control" id="telConcWeb"/>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                        <button type="button" id="validerConcWeb" class="btn btn-primary" data-dismiss="modal">Valider</button>
                    </div>

                </div>
            </div>
        </div>




                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="js/vendor/jquery-1.11.3.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/main.js"></script>
            <script src="js/calcul.js"></script>
                <script src="js/calcul2.js"></script>
                <script src="js/jquery.flexslider.js"></script>
                <script src="js/jquery.simple-text-rotator.js"></script>

                <script src="js/smoothscroll.js"></script>
                <script src="js/commande.js"></script>
                <script src="js/commandeWeb.js"></script>
                <script src="js/wow.min.js"></script>




</body>

<footer class="pied row" >
    <div class="col-md-12 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
        <a href="page/admin/admin.php" class="btn btn-info">Espace administrateur</a>
        <h3 class="signature">

            My IT Box Site Web
        </h3>
        <div id="backgr" class="col-lg-12 row">
            <a class="fa fa-phone"></a>
            <a href="#" class="fa fa-2x "></a>
            <a href="#" class="fa fa-wordpress"></a>
        </div>
    </div>
</footer>
</html>
