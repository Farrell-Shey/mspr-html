<?php require_once 'includes/header.php'; ?>

<form>

    <div class="row">

        <div class="col">


            <label for="first-name">Prénom</label>
            <input id="first-name" type="text" class="form-control" placeholder="Prénom">

        </div>

        <div class="col">

            <label for="last-name">Nom</label>
            <input id="last-name" type="text" class="form-control" placeholder="Nom">

        </div>

    </div>

    <div class="form-group">

        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Email@example.com">

    </div>

    <div class="form-group">

        <label for="phone">Numéros de Téléphone</label>
        <input type="number" class="form-control" id="phone" placeholder="06 XX XX XX XX">

    </div>

    <button type="submit" class="btn btn-primary">ENVOYER</button>

</form>

<?php require_once 'includes/footer.php'; ?>
