<?php
include('template/array.php');
?>

<!DOCTYPE html>
<html lang="ru en">

<?php
include("template/head.php");
?>

<body>
<div class="wrapper">

    <!-- header -->

    <?php
    include("template/header.php");
    ?>

    <!-- main -->

    <main class="page-3">

        <!-- one -->

        <article class="one">
            <div class="container-fluid">
                <h2>Шампунь ежедневного пользования</h2>

                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="item-cosmetic"><img src="img/cosmetic-1.svg" class="img-responsive"></div>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="row">
                            <ul class="inline">
                                <li>Раздел:</li>
                                <li>Объем / Вес:</li>
                                <li>Кол-во очков:</li>
                                <li>Отзывов:</li>
                            </ul>
                            <ul class="inline">
                                <li>Косметология</li>
                                <li>250 мл</li>
                                <li>14 <img src="img/stars.svg"></li>
                                <li>15</li>
                            </ul>
                        </div>
                        <div class="row">
                            <p class="price">280 грн. <span>  344 грн.</span></p>

                            <p class="coment">Хотите купить дешевле?
                                <span> Позвоните представителю интернет-магазина.</span></p>
                        </div>
                        <a href="#" class="buy-lg">Купить <img src="img/ar-right.png"></a>

                        <div class="row bottom">
                            <a href="#"><img src="img/b-long.png" class="img-responsive inline"></a>
                            <a href="#"><img src="img/f-long.png" class="img-responsive inline"></a>
                            <a href="#"><img src="img/t-long.png" class="img-responsive inline"></a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h3>Основные ингредиенты</h3>

                        <p>Доктор Нонна на телеканале домашний в программе спросите повара
                            на телеканале домашний в программе спросите повара Доктор Нонна на
                            телеканале домашний в программе Доктор Нонна на телеканале домашний
                            в программе. Доктор Нонна на телеканале домашний в программе спросите
                            повара Доктор Нонна на телеканале домашний в программе спросите...</p>
                        <a href="#" class="down">Развернуть <img src="img/copy.png" class="img-responsive inline"></a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h3>Показания</h3>

                        <p>Доктор Нонна на телеканале домашний в программе спросите повара
                            на телеканале домашний в программе спросите повара Доктор Нонна на
                            телеканале домашний в программе Доктор Нонна на телеканале домашний
                            в программе. Доктор Нонна на телеканале домашний в программе спросите
                            повара Доктор Нонна на телеканале домашний в программе спросите...</p>
                        <a href="#" class="down">Развернуть <img src="img/copy.png" class="img-responsive inline"></a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h3>Полное описание продукта</h3>

                        <p>Доктор Нонна на телеканале домашний в программе спросите повара
                            на телеканале домашний в программе спросите повара Доктор Нонна на
                            телеканале домашний в программе Доктор Нонна на телеканале домашний
                            в программе. Доктор Нонна на телеканале домашний в программе спросите
                            повара Доктор Нонна на телеканале домашний в программе спросите...</p>
                        <a href="#" class="down">Развернуть <img src="img/copy.png" class="img-responsive inline"></a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <h3>Способы применения</h3>

                        <p>Доктор Нонна на телеканале домашний в программе спросите повара
                            на телеканале домашний в программе спросите повара Доктор Нонна на
                            телеканале домашний в программе Доктор Нонна на телеканале домашний
                            в программе. Доктор Нонна на телеканале домашний в программе спросите
                            повара Доктор Нонна на телеканале домашний в программе спросите...</p>
                        <a href="#" class="down">Развернуть <img src="img/copy.png" class="img-responsive inline"></a>
                    </div>
                </div>
            </div>
        </article>

        <!-- two -->

        <article class="two">
            <div class="container-fluid">
                <h2>Вам также может понравиться</h2>

                <div class="row">

                    <?php
                    include('template/array.php');

                    foreach ($miniCatalog as $item) {
                        echo '<div class="col-xs-6 col-sm-4 col-md-1-5 col-lg-1-5">';
                        echo '<div class="item-cosmetic">';
                        echo "<img src=".$item['src']." alt=".$item['alt']." class=\"img-responsive\"/>";
                        echo "</div>";
                        echo '<h5>'.$item['text'].'</h5>';
                        echo '<p>'.$item['price'].'</p>';
                        echo '</div>';
                    }
                    ?>

                </div>
            </div>
        </article>

    </main>


    <!-- footer -->

    <?php
    include("template/footer.php");
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</div>
</body>
</html>