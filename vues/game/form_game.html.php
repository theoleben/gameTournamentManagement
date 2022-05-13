<!-- <form method="post">

<label for="title">Titre</label><br>
<input type="text" name="title" id="title"><br><br>

<label for="min_players">Nombre de joueurs minimums</label><br>
<input type="number" name="min_players" id="min_players"><br><br>

<label for="max_players">Nombre de joueurs maximum</label><br>
<input type="number" name="max_players" id="max_players"><br><br>

<button type="submit">Ajouter un jeu</button>

</form> -->

<!-- BOOTSTRAP -->
<h1 style='text-align: center' class='mt-3'>Ajouter un jeu</h1>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form method="post">

            <div class="form-group mt-3">
                <label for="title">Titre</label><br>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group mt-3">
                <label for="min_players">Nombre de joueurs minimums</label><br>
                <input type="number" class="form-control" name="min_players" id="min_players" min="2">
            </div>

            <div class="form-group mt-3">
                <label for="max_players">Nombre de joueurs maximum</label><br>
                <input type="number" class="form-control" name="max_players" id="max_players" min="2">
            </div>

            <button type="submit" class="btn btn-primary mt-3 mb-5">Ajouter un jeu</button>
            </form>
        </div>
    </div>
</div>