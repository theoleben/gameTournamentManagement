<h1 style='text-align: center' class='mt-3'>Liste des joueurs</h1>

<div class='container'>
<div class='row'>
<div class='col-md-6 mx-auto mt-3'>
<table class='table mb-5'>
    <thead>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>Nickname</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($players as $player ): ?>
            <tr>
                <td><?= $player->getId() ?></td>
                <td><?= $player->getEmail() ?></td>
                <td><?= $player->getNickname() ?></td>
            </tr>
        <?php endforeach ?>

    </tbody>
</table>
</div>
</div>
</div>