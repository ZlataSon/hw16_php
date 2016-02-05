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
    <link href='https://fonts.googleapis.com/css?family=Geo' rel='stylesheet' type='text/css'>

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

    <!-- main page-2 -->
    <main>

        <!-- catalog -->

        <div class="catalog">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-6 col-md-5 col-lg-3">
                    <nav class="catalog-nav">
                        <h2>Каталог</h2>
                        <ul>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Соли и
                                грязи</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Дезодорант женский "Фиона"</a></li>
                                    <li><a href="#">Дезодорант женский "Рут"</a></li>
                                    <li><a href="#">Дезодорант женский "Киви"</a></li>
                                    <li><a href="#">Дезодорант женский "Леди"</a></li>
                                    <li><a href="#">Мужской дезодорант "Лорд"</a></li>
                                    <li><a href="#">Женские духи "Леди"</a></li>
                                    <li><a href="#">Женские духи "Фиона"</a></li>
                                    <li><a href="#">Женские духи "Монел"</a></li>
                                    <li><a href="#">Женские духи "Киви"</a></li>
                                    <li><a href="#">Женские духи "Рут"</a></li>
                                    <li><a href="#">Женские духи "1954"</a></li>
                                    <li><a href="#">Мужской лосьон "Лорд"</a></li>
                                    <li><a href="#">Губная помада</a></li>
                                    <li><a href="#">Биологически акт</a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Кремы и лосьены</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Дезодорант женский "Фиона"</a></li>
                                    <li><a href="#">Дезодорант женский "Рут"</a></li>
                                    <li><a href="#">Дезодорант женский "Киви"</a></li>
                                    <li><a href="#">Дезодорант женский "Леди"</a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Парфюмерия</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Женские духи "Рут"</a></li>
                                    <li><a href="#">Женские духи "1954"</a></li>
                                    <li><a href="#">Мужской лосьон "Лорд"</a></li>
                                    <li><a href="#">Губная помада</a></li>
                                    <li><a href="#">Биологически акт</a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Витамины и бады</a>
                                <ul class="dropdown-menu dropdown-menu-right">

                                    <li><a href="#">Мужской лосьон "Лорд"</a></li>
                                    <li><a href="#">Губная помада</a></li>
                                    <li><a href="#">Биологически акт</a></li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Чаи</a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#">Чай "Фиона"</a></li>
                                    <li><a href="#">Чай "Монел"</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-9">
                    <div class="row news">
                        <a href="#" class="inline">Новинки</a>
                        <a href="#" class="inline">Акции</a>
                        <a href="#" class="inline">Я рекомендую</a>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-5.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-1.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-2.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-5.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-1.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-2.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-5.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-1.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-2.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-5.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-1.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                            <div class="item-cosmetic"><img src="img/cosmetic-2.svg" class="img-responsive"></div>
                            <h5>Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"</h5>

                            <p>280 грн. <a href="#" class="buy-sm pull-right">Купить</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <article class="two">
            <div class="container-fluid">
                <h2>Вам также может понравиться</h2>

                <div class="row">
                    <div class="col-xs-6 col-sm-4 col-md-1-5 col-lg-1-5">
                        <div class="item-cosmetic"><img src="img/cosmetic-1.svg" class="img-responsive"></div>
                        <h5>Шампунь ежедневного пользования</h5>

                        <p>280 грн.</p>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-1-5 col-lg-1-5">
                        <div class="item-cosmetic"><img src="img/cosmetic-2.svg" class="img-responsive"></div>
                        <h5>Шампунь ежедневного пользования</h5>

                        <p>280 грн.</p>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-1-5 col-lg-1-5">
                        <div class="item-cosmetic"><img src="img/cosmetic-3.svg" class="img-responsive"></div>
                        <h5>Шампунь ежедневного пользования</h5>

                        <p>280 грн.</p>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-1-5 col-lg-1-5">
                        <div class="item-cosmetic"><img src="img/cosmetic-4.svg" class="img-responsive"></div>
                        <h5>Шампунь ежедневного пользования</h5>

                        <p>280 грн.</p>
                    </div>
                    <div class="col-xs-6 col-sm-4 col-md-1-5 col-lg-1-5">
                        <div class="item-cosmetic"><img src="img/cosmetic-5.svg" class="img-responsive"></div>
                        <h5>Шампунь ежедневного пользования</h5>

                        <p>280 грн.</p>
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