<!doctype html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6aef1e111a.js" crossorigin="anonymous"></script>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="public/css/app.css">
</head>
<body>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">
            <img src="public/image/logo.png" alt="logo de caviar royal gift">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/mspr-html/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/mspr-html/marque">Marque</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href=""
                       id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        Nos Produits
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item item-category" href="produits">Liste des produits</a></li>
                        <li><a class="dropdown-item" href="http://localhost/mspr-html/produit-black-skeleton">Skeleton Black</a></li>
                        <li><a class="dropdown-item" href="http://localhost/mspr-html/produit-tourbillon-carbon">Tourbillon Carbon</a></li>
                        <li><a class="dropdown-item" href="http://localhost/mspr-html/produit-mars">Discorvery Mars</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/mspr-html/contact">Nous Contacter</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main id="main">