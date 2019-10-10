<!DOCTYPE html>
<html>

<?php include('../templates/header.php') ?>

<h1>
    <?php
        session_start();
        echo "Welcome " . $_SESSION['user'];
    ?>
</h1>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="../../images/711px-PHP-logo.svg.png" class="d-block w-100" alt="image1">
        </div>
        <div class="carousel-item">
            <img src="../../images/images.jpeg" class="d-block w-100" alt="image2">
        </div>
        <div class="carousel-item">
            <img src="../../images/PHP-1.jpg" class="d-block w-100" alt="image3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>



<?php include('../templates/footer.php') ?>


</html>