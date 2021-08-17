<?php get_header(); ?>

    <div class="container text-center">
        <h1 class="h3 mt-5 mb-1">My first carousel with cats</h1>

        <div id="carousel" class="carousel slide d-inline-block" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="http://localhost/web/wp-content/uploads/2021/05/MG_7744-scaled.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="http://localhost/web/wp-content/uploads/2021/05/MG_7732-scaled.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="http://localhost/web/wp-content/uploads/2021/05/MG_7757-scaled.jpg" alt="...">
                </div>
            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Предыдущий</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Следующий</span>
            </a>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-4 c1">1</div>
            <div class="col-4 c2">2</div>
            <div class="col-4 c3">3</div>
        </div>
        <div class="row">
            <div class="col-12 c4">4</div>
        </div>
        <div class="row">
            <div class="col-12 c5">5</div>
        </div>
    </div>
<?php get_footer(); ?>