

<!-- BOOTSTRAP -->
<h1 style='text-align: center' class='mt-3'>Ajouter un match</h1>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form method="post">
                
            <?php if( empty($_POST) ) : ?>
                
            <div class="form-group mt-3">
                <label for="game_id">Identifiant du jeu</label><br>

                <select class="form-control" name="game_id" id="game_id">
                    <option value="">--Veuillez choisir le jeu--</option>
                    <?php foreach($games as $game ): ?>
                    <option value=<?= $game->getId() ?>> <?= $game->getId() ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <?php elseif( !empty($_POST) ) : ?>

            <div class="form-group mt-3">
            <label for="game_idd">Identifiant du jeu</label><br>
            
            <input type="text" class="form-control" value=<?= $id_game ?> name="game_id" id="game_idd" disabled>
            <input type="hidden" value=<?= $id_game ?> name="game_id">
            </div>

            <?php endif ?>

            <?php if( !empty($_POST) ) : ?>

            <div class="form-group mt-3">
                <label for="start_date">Date</label><br>
                <input type="date" class="form-control" id="start_date" name="start_date">
            </div>

            <div class="form-group mt-3">
                <label for="winner_id">Identifiant du joueur gagnant</label><br>
                <select class="form-control" name="winner_id" id="winner_id">
                <option value="">--Veuillez choisir l'identifiant du gagnant--</option>
                <?php foreach( $playersContest as $player ): ?>
                <option value=<?= $player->getPlayer_id() ?>> <?= $player->getPlayer_id() ?></option>
                <?php endforeach ?>
                </select>
            </div>

            <?php endif ?>

            <button type="submit" class="btn btn-primary mt-3 mb-5">Ajouter un match</button>

            </form>
        </div>
    </div>
</div>