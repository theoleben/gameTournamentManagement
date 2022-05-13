<h1 style='text-align: center' class='mt-3'>Liste des jeux disponibles</h1>

<div class='container'>
<div class='row'>
<div class='col-md-6 mx-auto mt-3'>
<table class='table mb-5'>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Min_players</th>
            <th>Max_players</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($games as $game ): ?>
            <tr>
                <td><?= $game->getId() ?></td>
                <td><?= $game->getTitle() ?></td>
                <td><?= $game->getMin_players() ?></td>
                <td><?= $game->getMax_players() ?></td>
            </tr>
        <?php endforeach ?>

    </tbody>
</table>
</div>
</div>
</div>