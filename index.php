<?php require_once 'includes/header.php'; ?>
<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/image/iphone-noir-caviar500px.png" class="d-block w-100" alt="skeleton black">
                <div class="carousel-caption d-none d-md-block">
                    <p>Génial</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="public/image/tourbillon500px.png" class="d-block w-100" alt="tourbillon-carbon">
                <div class="carousel-caption d-none d-md-block">
                    <p>Fabuleux</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="public/image/discovery-mars500px.png" class="d-block w-100" alt="discovery mars">
                <div class="carousel-caption d-none d-md-block">
                    <p>Luxueux</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<script src="public/js/manifest.js"></script>
<script src="public/js/vendor.js"></script>
<script src="public/js/app.js"></script>
</body>
</html>