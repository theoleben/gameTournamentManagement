<!-- <form method="post">

<label for="email">Email</label><br>
<input type="text" name="email" id="email"><br><br>

<label for="nickname">Nickname</label><br>
<input type="text" name="nickname" id="nickname"><br><br>

<button type="submit">Ajouter un joueur</button>

</form> -->

<!-- BOOTSTRAP -->
<h1 style='text-align: center' class='mt-3'>Ajouter un joueur</h1>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <form method="post">

            <div class="form-group mt-3">
                <label for="email">Email</label><br>
                <input type="text" class="form-control" name="email" id="email">
            </div>

            <div class="form-group mt-3">
                <label for="nickname">Nickname</label><br>
                <input type="text" class="form-control" name="nickname" id="nickname">
            </div>

            <button type="submit" class="btn btn-primary mt-3 mb-5">Ajouter un joueur</button>

            </form>
        </div>
    </div>
</div>