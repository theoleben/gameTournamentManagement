<?php

require "autoload.php";

// Test connexion BDD
// use Modeles\BDD;

// BDD::pdo();

// Appel des différents controleurs qui nous intéressent

// echo "<pre>";
//     print_r( $_GET );
// echo "</pre>";

if( $_GET )
{
    // echo "here";

    if( ( isset( $_GET["controleur"] ) && !empty( $_GET["controleur"] ) ) && 
        ( isset( $_GET["methode"] ) && !empty( $_GET["methode"] ) ) )
    {
        // echo "here2";

        $controleur = $_GET["controleur"];
        $methode = $_GET["methode"];
        $id = $_GET["id"] ?? null;

        $nomClasse = "Controleurs\\" . ucfirst($controleur) . "Controleur";

        $controleur = new $nomClasse;
        // $controleur = new ProduitControleur;
        // $controleur->index();
        // echo "id " . $id;
        $controleur->$methode( $id );
    }
}
else
{
    include "vues/header.html.php"; ?>

    <!-- <h1>Théo LEBEN</h1> -->
    <h1 style='text-align: center' class='mt-3'>Accueil</h1>

    <!-- <h2>Ajout des données</h2>
    <a href="?controleur=game&methode=addGame"> Ajouter un jeu</a><br>
    <a href="?controleur=player&methode=addPlayer"> Ajouter un joueur</a><br>
    <a href="?controleur=contest&methode=addContest"> Ajouter un match</a><br><br>

    <h2>Affichage des données</h2>
    <a href="?controleur=player&methode=displayPlayer"> Liste des joueurs</a><br>
    <a href="?controleur=game&methode=displayGame"> Liste des jeux disponibles</a><br>
    <a href="?controleur=contest&methode=displayContest"> Liste des matchs</a><br> -->

    <div class='container'>
    <div class='row'>
    <div class='col-md-8 mx-auto mt-3'>
        <p class='text-center alert alert-dark pt-2' role="alert">Bienvenue ! Vous souhaitez avoir un site permettant de gérer des tournois de jeux ? Vous êtes au bon endroit. Avec un compte admin, vous avez la possibilité d'ajouter des jeux, des joueurs et des matchs. Sans compte admin, vous pouvez d'ores et déjà voir les jeux, les joueurs et les matchs que j'ai pu ajouter moi-même.</p>

        <p class='text-center alert alert-secondary pt-4' role="alert"> <b>Note</b> : Dans un souci de modération avec les messages postés et de sécurité avec la base de données, aucun ajout quelqu'il soit n'est rendu possible.</p>
    </div>
    </div>
    </div>

    <?php

    // echo "Ici on ajoute les liens vers les controleurs";

    include "vues/footer.html.php";
}

