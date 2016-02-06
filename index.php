<!DOCTYPE html>
<html lang="ru en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>HW16_Salyakina_Old_hw13</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,900italic,900,700italic,700,500italic,500,400italic'
          rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9] -->
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="wrapper">

    <!-- header -->

    <?php
        include("header.php");
    ?>

    <!-- main page-1 -->

    <main>

        <!-- slide -->
        <div class="slide">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/slide-1.png" class="img-responsive" alt="background-1">

                        <div class="carousel-caption">
                            <div class="col-xs-12 text-left">
                                <h1>Купить продукцию сейчас</h1>
                                <a href="#" class="buy-lg">Узнать больше <img src="img/ar-right.png"></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="img/slide-1.png" class="img-responsive" alt="background-1">

                        <div class="carousel-caption">
                            <div class="col-xs-12 text-left">
                                <h1>Купить продукцию сейчас</h1>
                                <a href="#" class="buy-lg">Узнать больше <img src="img/ar-right.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <img src="img/arrow-l.png" alt="" class="arrow-l">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <img src="img/arrow-r.png" alt="" class="arrow-r">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- events -->
        <article class="events">
            <div class="container-fluid">
                <h2>Новости</h2>

                <?php
                include('array.php');

                foreach ($events as $item) {
                    echo '<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">';
                    echo '<div class="item-cosmetic">';
                    echo "<img src=".$item['src']." alt=".$item['alt']." class=\"img-responsive\"/>";
                    echo "</div>";
                    echo '<p>'.$item['text'].'</p>';
                    echo "<a class=\"down\" href=".$item['url']."> Подробнее <img src=\"img/copy.png\" class=\"img-responsive inline\"></a>";
                    echo '</div>';
                }
                ?>

            </div>
        </article>

        <!-- recommend -->
        <article class="recommend">
            <div class="container-fluid">
                <h2>Я рекомендую</h2>

                <div class="row news">
                    <a href="#" class="inline">Соли и грязи</a>
                    <a href="#" class="inline">Кремы и лосьены</a>
                    <a href="#" class="inline">Парфюмерия</a>
                    <a href="#" class="inline">Витамины и бады</a>
                    <a href="#" class="inline">Чаи</a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                    <div class="item-cosmetic"><img src="img/cosmetic-1.svg" class="img-responsive"></div>
                    <h3>Шампунь ежедневного пользования</h3>
                    <h5>Доктор Нонна на телеканале домашний в программе спросите повара Доктор Нонна на телеканале
                        домашний в программе спросите повара Доктор Нонна на телеканале домашний в программе Доктор
                        Нонна на телеканале домашний в программе...</h5>

                    <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">

                    <?php
                    include('array.php');

                    foreach ($catalog_1 as $item) {
                        echo '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">';
                        echo '<div class="item-cosmetic">';
                        echo "<img src=".$item['src']." alt=".$item['alt']." class=\"img-responsive\"/>";
                        echo "</div>";
                        echo '<h5>'.$item['text'].'</h5>';
                        echo "<a class=\"down\" href=".$item['url']."> Подробнее <img src=\"img/copy.png\" class=\"img-responsive inline\"></a>";
                        echo '</div>';
                    }
                    ?>

                </div>

            </div>
        </article>

        <!-- videos -->
        <article class="videos">
            <div class="container-fluid">
                <h2>Телеканал Теледом</h2>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 video">
                        <div class="video-wrapper">
                            <div class="video-container">
                                <video controls="controls">
                                    <source src="video/video-1.mp4"
                                            type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                    Элемент video не поддерживается вашим браузером.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 video">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 video">
                            <div class="video-wrapper">
                                <div class="video-container">
                                    <video controls="controls">
                                        <source src="video/video-2.mp4"
                                                type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                        Элемент video не поддерживается вашим браузером.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 video">
                            <div class="video-wrapper">
                                <div class="video-container">
                                    <video controls="controls">
                                        <source src="video/video-3.mp4"
                                                type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                        Элемент video не поддерживается вашим браузером.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 video">
                            <div class="video-wrapper">
                                <div class="video-container">
                                    <video controls="controls">
                                        <source src="video/video-4.mp4"
                                                type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                        Элемент video не поддерживается вашим браузером.
                                    </video>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 video">
                            <div class="video-wrapper">
                                <div class="video-container">
                                    <video controls="controls">
                                        <source src="video/video-5.mp4"
                                                type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                                        Элемент video не поддерживается вашим браузером.
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h3>Новые видео</h3>
                        <ul>
                            <li><a href="#"><img src="img/right-orange.png"/>Шампунь ежедневного пользования (16:54)</a>
                            </li>
                            <li><a href="#"><img src="img/right-orange.png"/>ПРЕМЬЕРА! Ева Бушмина - Религия (05:14)</a>
                            </li>
                            <li><a href="#"><img src="img/right-orange.png"/>Анжелика Варум - Я Всегда С Тобой
                                (Official Video)</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h3>Популярные</h3>
                        <ul>
                            <li><a href="#"><img src="img/right-orange.png"/>Шампунь ежедневного пользования (16:54)</a>
                            </li>
                            <li><a href="#"><img src="img/right-orange.png"/>ПРЕМЬЕРА! Ева Бушмина - Религия (05:14)</a>
                            </li>
                            <li><a href="#"><img src="img/right-orange.png"/>Анжелика Варум - Я Всегда С Тобой
                                (Official Video)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </article>

        <!-- blockquote -->
        <article class="blockquote">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-7 quote">
                    <h2>Цель моей жизни - </h2>

                    <h2>делать людей счастливыми</h2>

                    <p>В бизнес компании Dr. Nona пришел на успех своей жены Ольги, которая доказала мне что
                        даже находясь в декретном
                        отпуске и гуляя с маленьким ребенком на улице за один месяц можно заработать в два раза
                        больше
                        чем моя зарплата
                        в милиции. Позже я на этот бизнес посмотрел серьезнее и увидел себя в нем. Это дело для
                        серьезных и амбициозных
                        людей, которые хотят изменить свою жизнь. 27 декабря 2007 года уволился из МВД и теперь
                        сотрудничаю ...</p>
                    <a href="#" class="down">Узнайте подробнее <img src="img/copy.png"
                                                                    class="img-responsive inline"></a>

                    <div class="row text-left">
                        <a href="#" class="social"><img src="img/icon-yt.png" class="img-responsive"
                                                        alt="you tube"/></a>
                        <a href="#" class="social"><img src="img/icon-i.png" class="img-responsive"
                                                        alt="instogram"/></a>
                        <a href="#" class="social"><img src="img/icon-b.png" class="img-responsive" alt="contact"/></a>
                        <a href="#" class="social"><img src="img/icon-ok.png" class="img-responsive"
                                                        alt="odnoclasnik"/></a>
                        <a href="#" class="social"><img src="img/icon-f.png" class="img-responsive" alt="facebook"/></a>
                        <a href="#" class="social"><img src="img/icon-t.png" class="img-responsive" alt="twitter"/></a>
                    </div>
                </div>
            </div>
        </article>

        <!-- partners -->
        <article class="partners">
            <div class="container-fluid">
                <h2>Мои партнеры по бизнесу</h2>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="item-cosmetic"><img src="img/photo-1.png" class="img-responsive"></div>
                    <h3>Диорнева Татьяна</h3>
                    <h5>Директор</h5>

                    <p><img src="img/map.png" class="img-responsive inline"> Мариуполь</p>

                    <div class="col-xs-12">
                        <a href="#" class="social"><img src="img/icon-b.png" class="img-responsive" alt="contact"/></a>
                        <a href="#" class="social"><img src="img/icon-ok.png" class="img-responsive"
                                                        alt="odnoclasnik"/></a>
                        <a href="#" class="social"><img src="img/icon-f.png" class="img-responsive" alt="facebook"/></a>
                        <a href="#" class="social"><img src="img/icon-t.png" class="img-responsive" alt="twitter"/></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="item-cosmetic"><img src="img/photo-2.png" class="img-responsive"></div>
                    <h3>Проценко Мария</h3>
                    <h5>Директор</h5>

                    <p><img src="img/map.png" class="img-responsive inline"> Донецк</p>

                    <div class="col-xs-12">
                        <a href="#" class="social"><img src="img/icon-b.png" class="img-responsive" alt="contact"/></a>
                        <a href="#" class="social"><img src="img/icon-ok.png" class="img-responsive"
                                                        alt="odnoclasnik"/></a>
                        <a href="#" class="social"><img src="img/icon-f.png" class="img-responsive" alt="facebook"/></a>
                        <a href="#" class="social"><img src="img/icon-t.png" class="img-responsive" alt="twitter"/></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="item-cosmetic"><img src="img/photo-1.png" class="img-responsive"></div>
                    <h3>Диорнева Татьяна</h3>
                    <h5>Директор</h5>

                    <p><img src="img/map.png" class="img-responsive inline"> Мариуполь</p>

                    <div class="col-xs-12">
                        <a href="#" class="social"><img src="img/icon-b.png" class="img-responsive" alt="contact"/></a>
                        <a href="#" class="social"><img src="img/icon-ok.png" class="img-responsive"
                                                        alt="odnoclasnik"/></a>
                        <a href="#" class="social"><img src="img/icon-f.png" class="img-responsive" alt="facebook"/></a>
                        <a href="#" class="social"><img src="img/icon-t.png" class="img-responsive" alt="twitter"/></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="item-cosmetic"><img src="img/photo-2.png" class="img-responsive"></div>
                    <h3>Проценко Мария</h3>
                    <h5>Директор</h5>

                    <p><img src="img/map.png" class="img-responsive inline"> Донецк</p>

                    <div class="col-xs-12">
                        <a href="#" class="social"><img src="img/icon-b.png" class="img-responsive" alt="contact"/></a>
                        <a href="#" class="social"><img src="img/icon-ok.png" class="img-responsive"
                                                        alt="odnoclasnik"/></a>
                        <a href="#" class="social"><img src="img/icon-f.png" class="img-responsive" alt="facebook"/></a>
                        <a href="#" class="social"><img src="img/icon-t.png" class="img-responsive" alt="twitter"/></a>
                    </div>
                </div>
            </div>
        </article>

        <!-- forms -->
        <article class="forms">
            <div class="container-fluid">
                <h2>Добро пожаловать в команду</h2>

                <div class="row">
                    <form role="form" class="form-inline">
                        <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-3">
                            <label for="name"></label>
                            <input type="text" class="form-control" id="name" placeholder="Ваше имя">
                        </div>
                        <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-3">
                            <label for="number"></label>
                            <input type="text" class="form-control" id="number" placeholder="Телефон">
                        </div>
                        <div class="form-group col-xs-12 col-sm-4 col-md-4 col-lg-3">
                            <label for="email"></label>
                            <input type="email" class="form-control" id="email" placeholder="E-mail адрес">
                        </div>
                        <div class="form-group col-xs-6 col-sm-6 col-md-12 col-lg-3">
                            <button type="submit" class="btn btn-success">Присоединяйтесь <img
                                    src="img/ar-right.png">
                            </button>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <p>Узнайте подробнее почему выгодня сотрудничать с нами и быть в нашей команде <img
                            src="img/ar-right.png"></p>
                </div>
            </div>
        </article>

        <!-- last -->

        <article class="last">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis eum
                        possimus quibusdam, quod recusandae tempore voluptate. Architecto assumenda
                        deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi, commodi i
                        nventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                        corporis eum possimus quibusdam, quod recusandae tempore voluptate. Architecto
                        assumenda deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi,
                        commodi inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto corporis eum possimus quibusdam, quod recusandae tempore
                        voluptate. Architecto assumenda deserunt dignissimos libero molestiae nisi officiis
                        pariatur qui. Animi, commodi inventore.
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto corporis eum
                        possimus quibusdam, quod recusandae tempore voluptate. Architecto assumenda
                        deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi, commodi i
                        nventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto
                        corporis eum possimus quibusdam, quod recusandae tempore voluptate. Architecto
                        assumenda deserunt dignissimos libero molestiae nisi officiis pariatur qui. Animi,
                        commodi inventore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Architecto corporis eum possimus quibusdam, quod recusandae tempore
                        voluptate. Architecto assumenda deserunt dignissimos libero molestiae nisi officiis
                        pariatur qui. Animi, commodi inventore.
                    </div>

                </div>
            </div>
        </article>
    </main>

    <!-- footer -->

    <?php
    include("footer.php");
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</div>
</body>
</html>