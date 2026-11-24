<!doctype html>
<html lang="fr">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Portfolio de Amadéo Vanmarcke - BTS SIO SLAM">
        <meta name="author" content="Amadéo Vanmarcke">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="icon" href="../images/favicon.ico">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/realisations.css" rel="stylesheet">
        <title>Portfolio de Amadéo Vanmarcke</title>
    </head>
    <body>
        <?php
            $uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        ?>
        <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-md">
            <div class="container">
                <button type="button" class="navbar-toggler" data-toggle="collapse"
                        data-target="#navbar" aria-controls="navbar">
                    <span class="sr-only">Navigation raccourcie</span>☰
                </button>
                <a class="navbar-brand" href="index.php?uc=accueil">Mon portfolio</a>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="index.php?uc=accueil" class="nav-link <?php if ($uc == 'accueil') { ?>active<?php } else { ?>link-body-emphasis<?php } ?>">
                                <span class="fa fa-home"></span> Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?uc=cv" class="nav-link <?php if ($uc == 'cv') { ?>active<?php } else { ?>link-body-emphasis<?php } ?>">
                                <span class="fa fa-id-badge"></span> CV
                            </a>
                        </li>
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link"
                               data-toggle="dropdown" role="button">
                                <span class="fa fa-list-alt"></span> Réalisations <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation" class="dropdown-header dropdown-item">
                                    En entreprise</li>
                                <li role="presentation" class="dropdown-item">
                                    <a role="menuitem" href="index.php?uc=ggmarmedi" class="nav-link <?php if ($uc == 'ggmarmedi') { ?>active<?php } ?>">Site WEB GGMARMEDI</a>
                                </li>
                                <li role="presentation" class="dropdown-header dropdown-item">
                                    Personnel</li>
                                <li role="presentation" class="dropdown-item">
                                    <a role="menuitem" href="appliandroid.html">AramisScan</a>
                                </li>
                                <li role="presentation" class="dropdown-item">
                                <a href="index.php?uc=gererFrais&action=saisirFrais">Workshop GMOD</a>
                                </li>
                                <li role="presentation" class="dropdown-item">
                                <a href="index.php" class="nav-link <?php if (!$uc || $uc == 'accueil') { ?>active<?php } else { ?>link-body-emphasis<?php } ?>" aria-current="page">Projet 3</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>








