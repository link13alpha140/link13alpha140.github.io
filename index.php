<?php

require 'pages\v_entente.php';

$uc = filter_input(INPUT_GET, 'uc', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if(empty($uc)){
    $uc = 'accueil';
}

switch ($uc) {
    case 'accueil':
        include 'pages\v_acccueil.php';
        break;
    case 'cv':
        include 'pages\v_cv.php';
        break;
    case 'ggmarmedi':
        include 'pages\v_ggmarmedi.php';
        break;
    case 'deconnexion':
        include 'c_deconnexion.php';
        break;
    default:
        include 'v_erreurs.php';
        break;
}

require 'pages\v_pied.php';