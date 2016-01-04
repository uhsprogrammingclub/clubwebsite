<?php
    require '../includes/config.php';
    ?>
    <!DOCTYPE html>
<html lang="en">

<?php require("../templates/head.php"); ?>

<body>

    <?php require("../templates/navigation_bar.php"); ?>
    

   
    <!-- Header Carousel -->
    <header id = "myCarousel" class = "carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>


        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" id = "index_slide_1"></div>
                <div class="carousel-caption">
                    <h5>Empty</h5>
                </div>
            </div>
            <div class="item">
                <div class="fill" id = "index_slide_2"></div>
                <div class="carousel-caption">
                    <h5>A tasty snack</h5>
                </div>
            </div>
            <div class="item">
                <div class="fill" id = "index_slide_3"></div>
                <div class="carousel-caption">
                    <h5>Empty</h5>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>


   
    <!-- Page Content -->
    <div class = "col-md-2"></div>
    <div class="container col-md-8" id = "index_content_container">
        <h1>Welcome</h1><hr>
        <div><p>Welcome paragraph(s). </p></div>

        
        <!-- Footer -->
        <?php
            require("../templates/footer.php");
        ?>