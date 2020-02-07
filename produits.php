<?php
$title = "Nos Produits";

$products = "
[
    {\"product\": \"GRAND COMPLICATIONS SKELETON BLACK\", \"price\": \"$9 610\", \"image\": \"iphone-noir-caviarnpm.png\", \"link\": \"produit-black-skeleton\"},
    {\"product\": \"UNIQUE EDITION DISCORVERY MARS\", \"price\": \"$11 400\", \"image\": \"discovery-mars.png\", \"link\": \"produit-mars\"},
    {\"product\": \"GRAND COMPLICATION TOURBILLON CARBON\", \"price\": \"$9 070\", \"image\": \"tourbillon-carbon.png\", \"link\": \"produit-tourbillon-carbon\"},
    {\"product\": \"UNIVERS\", \"price\": \"$11 470\", \"image\": \"produit-univers.png\", \"link\": \"produit-tourbillon-carbon\"},
    {\"product\": \"GRAND COMPLICATION TOURBILLON GOLD\", \"price\": \"$10 830\", \"image\": \"produit-tourbillon-gold.png\", \"link\": \"produit-tourbillon-carbon\"},
    {\"product\": \"UNIQUE EDITION DISCOVERY LUNA\", \"price\": \"$11 310\", \"image\": \"produit-luna.png\", \"link\": \"produit-mars\"},
    {\"product\": \"\", \"price\": \"$11 310\", \"image\": \"produit-luna.png\", \"link\": \"produit-mars\"}
]
";

require_once 'includes/header.php'; ?>

<section class="jumbotron">
    <h1 class="">Nos Innovations Iphone 11 Pro</h1>
    <div class="row">
        <?php foreach (json_decode($products) as $product): ?>
            <div class="col">

                <a href="<?php echo $product->link ?>" class="slide-up">
                    <figure class="card">
                        <img src="public/image/<?php echo $product->image ?>"
                             alt="<?php echo $product->product ?>"
                             class="card-img">
                        <figcaption class="figure-caption">Caviar iphone 11 PRO</figcaption>
                        <h2><?php echo $product->product ?></h2>
                        <p><?php echo $product->price ?></p>
                    </figure>
                </a>

            </div>
        <?php endforeach; ?>
    </div>
</section>


<?php require_once 'includes/footer1.php'; ?>
