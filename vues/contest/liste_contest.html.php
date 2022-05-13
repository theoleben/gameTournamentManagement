<h1 style='text-align: center' class='mt-3'>Liste des matchs</h1>

<div class='container'>
<div class='row'>
<div class='col-md-8 mx-auto mt-3'>
<table class='table mb-5'>
    <thead>
        <tr>
            <th>Nom du jeu</th>
            <th>Nombre de joueurs enregistrés</th>
            <th>Date de démarrage</th>
            <th>Pseudonyme du gagnant</th>
            <th>Détails du match</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($contests as $contest ): ?>
            <tr>
                <td><?= $contest->getId() ?></td>
                <td><?= $contest->getGameName()->getTitle() ?></td>
                <td><?= $contest->getStart_date() ?></td>
                <td>
                <?php 
                    if( !empty( $contest->getWinner_id() ) )
                    {
                        echo $contest->getPseudoWinner()->getNickname();
                    }
                    else
                    {
                        echo "Pas encore de gagnant";
                    }
                ?>
                </td>
                <td><a href="?controleur=contest&methode=displayContestDetails&id=<?= $contest->getId() ?>">Détails</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>
</div>
</div>