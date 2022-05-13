<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de tournois</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<!-- <nav>
    <a href="index.php">Retour vers l'accueil</a><br><br>
</nav> -->
<body>
    <nav>
    <ul class="nav">
            <!-- <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controleur=game&methode=addGame">Ajouter un jeu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controleur=player&methode=addPlayer">Ajouter un joueur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controleur=contest&methode=addContest">Ajouter un match</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controleur=player&methode=displayPlayer">Liste des joueurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controleur=game&methode=displayGame">Liste des jeux disponibles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?controleur=contest&methode=displayContest">Liste des matchs</a>
            </li>
        </ul>
    </nav>