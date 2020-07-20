<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="keywords" content="jeux de momes">
	<meta name="description" content="Page d'accueil et présentation de quelques articles de notre site, ou nous trouvez et naviguer sur le site de Jeux de mômes">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="public/css/style.css">
	<!--<link rel="stylesheet" href="public/css/slider.css">-->
	<title>Jeux de Mômes</title>
</head>
<body class="page">
<header class="entete  container-fluid" id="top">
<div id="cookie-bar">
    <div class="cookie">
        Ce site web utlilise des cookies pour personnaliser le contenu et pour analyser notre trafic. 
        En utilisant ce site, vous acceptez notre utilisation des cookies. 
        Vous pouvez refusez 
        <button id='nocookie' class="bg-danger">en cliquant ici</button>
        Si ce n'est pas le cas, cliquez ici : 
        <button id="cookieok" class="bg-danger">J'accepte</button>
    </div>
</div>		
<div class="connexion">
<!-- Ici boite modal pour se loger sur le site-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Login</button>
    <!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
    <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Se connecter</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
    <!-- Modal body -->
            <div class="modal-body">
                <form class="contact" action="traitement.php" method="post">
                    <p>
                        <label for="identifiant">Identifiant</label>
                        <input type="text" name="identifiant" id="identifiant" placeholder="identifiant">
                    </p> 
                    <p>
                        <label for="password">Mot de passe</label>
                        <input type="text" name="password" id="password" placeholder="123 n'est pas un mdp">
                    </p>
                </form>        
            </div>
    <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Connexion</button>
            </div>
        </div>
    </div>
</div>
<!-- Ici boite modal pour s'enregistrer sur le site -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myregister">S'enregistrer</button>
<div class="modal fade" id="myregister">
    <div class="modal-dialog">
        <div class="modal-content">
        <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">S'enregistrer</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
        <!-- Modal body -->
            <div class="modal-body">
                <form id="contact" action="traitement.php" method="post">
                    <p>
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" placeholder="Votre adresse mail" required>
                        <span id="emailError"></span><br>
                    </p>
                    <p>
                        <label for="ide">Identifiant</label>
                        <input type="text" name="ide" id="ide" placeholder="identifiant" required>
                        <span id="missID"></span><br>
                    </p> 
                    <p>
                        <label for="password">Mot de passe</label>
                        <input type="text" name="password" id="password" placeholder="123 n'est pas un mdp" required>
                        <span id="missPsw"></span>
                    </p>
                    <p>
                        <label for="passwordcfm">Confirmez votre mdp</label>
                        <input type="text" name="passwordcfm" id="passwordcfm" placeholder="à nouveau votre mdp">
                        <span id="missPswcfm"></span>
                    </p>
                    <button type="submit" id="envoi" class="btn btn-danger" data-dismiss="modal">Register</button>
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    
                </form>        
            </div>
        <!-- Modal footer -->
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="public/js/regex.js"></script>
<!-- Barre de naviguation BOOTSTRAP-->
<div class="container">
<h1>Jeux de Mômes</h1>
<nav class="menuprincipal navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
        <ul class="navbar-nav" id="menuActive">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="presentation.html">Présentation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="boutique.html">Boutique</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
            </li>
        </ul>
    </div>
</nav>
</div>
</header>