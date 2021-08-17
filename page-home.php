<?php
/*
  * Template name: Home
  * */ //Этот комент нельзя удалять!!! тут написано имя шаблона как он будет называтся в админке у ТЕБЯ его не было!!
get_header();
?>
    <div class="about" id="about">
        <div class="container">
            <h1 class="text-center">О компании</h1>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <img src="logo" class="img-fluid">
                    logo
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 desc">

                    <h3>Название</h3>
                    <p>
                        Описание компании
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid text-center cf">
        <h1 class="h3 mt-5 mb-1">К примеру наше оборудование</h1>
        <div id="carousel" class="carousel slide d-inline-block" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="http://localhost/test/wp-content/uploads/2021/08/stanok3-e1629047867245.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="http://localhost/test/wp-content/uploads/2021/08/stanok5-e1629047757848.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="http://localhost/test/wp-content/uploads/2021/08/stanok2-e1629047899916.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="http://localhost/test/wp-content/uploads/2021/08/stanok1-e1629047927686.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="http://localhost/test/wp-content/uploads/2021/08/koznak-e1629048072442.jpg" alt="...">
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

    <div class="blog" id="blog">
        <div class="container">
            <h1 class="text-center">Актуальное</h1>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img src="#" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">

                                Краткое описание
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-img">
                                <img src="#" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Post Title</h4>
                                <p class="card-text">

                                    Краткое описание
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img src="#" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">

                                Краткое описание
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img src="#" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">

                                Краткое описание
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-img">
                                <img src="#" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Post Title</h4>
                                <p class="card-text">

                                    Краткое описание
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img src="#" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">

                                Краткое описание
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img src="#" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">

                                Краткое описание
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card">
                            <div class="card-img">
                                <img src="#" class="img-fluid">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Post Title</h4>
                                <p class="card-text">

                                    Краткое описание
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="card-link">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img src="#" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h4 class="card-title">Post Title</h4>
                            <p class="card-text">

                                Краткое описание
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="card-link">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();

