<h1 style='text-align: center' class='mt-3'>Détails de la partie</h1>

<div class='container'>
<div class='row'>
<div class='col-md-6 mx-auto mt-3'>
<table class='table mb-5'>
    <thead>
        <tr>
            <th>Pseudonyme</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($players as $player ): ?>
            <tr>
                <td><?= $player->getPlayer()->getNickname() ?></td>
                <td><?= $player->getPlayer()->getEmail() ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
</div>
</div>
</div>