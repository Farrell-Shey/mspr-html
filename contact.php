<?php require_once 'includes/header.php'; ?>
<img class="ligne" src="public/image/line.svg" alt="ligne ">
<h1 class="contact">Nous Contacter</h1>

<form>
    <div class="container">

        <div class="form-group">

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
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email@example.com">
        </div>

        <div class="form-group">
            <label for="phone">Numéros de Téléphone</label>
            <input type="number" class="form-control" id="phone" placeholder="06 XX XX XX XX">
        </div>

        <button type="submit" class="btn btn-outline-light">ENVOYER</button>

    </div>

    <img class="ligne-bas" src="public/image/line-return.svg" alt="ligne ">

</form>


<?php require_once 'includes/footer1.php'; ?>
