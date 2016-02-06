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

                        <?php
                        include('array.php');

                        echo '<ul>';
                        foreach ($navCatalog as $parent) {

                            echo "<li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=".$parent['url'].">".$parent['title']."</a>";
                            if (is_array($parent['child'])) {
                                echo '<ul class="dropdown-menu dropdown-menu-right">';
                                foreach ($parent['child'] as $child) {
                                    echo "<li><a href=".$child['url'].">".$child['title']."</a>";
                                }
                                echo '</ul>';
                            }
                            echo '</li>';
                        }
                        echo '</ul>';
                        ?>

                    </nav>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 col-lg-9">
                    <div class="row news">
                        <a href="#" class="inline">Новинки</a>
                        <a href="#" class="inline">Акции</a>
                        <a href="#" class="inline">Я рекомендую</a>
                    </div>
                    <div class="row">

                    <?php
                    include('array.php');

                    foreach ($catalog as $item) {
                        echo '<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">';
                        echo '<div class="item-cosmetic">';
                        echo "<img src=".$item['src']." alt=".$item['alt']." class=\"img-responsive\"/>";
                        echo "</div>";
                        echo '<h5>'.$item['text'].'</h5>';
                        echo '<p>'.$item['price'];
                        echo "<a class=\"buy-sm pull-right\" href=".$item['url']."> Купить </a>";
                        echo '</p>';
                        echo '</div>';
                    }
                    ?>

                    </div>
                </div>
            </div>
        </div>
        <article class="two">
            <div class="container-fluid">
                <h2>Вам также может понравиться</h2>

                <div class="row">

                    <?php
                    include('array.php');

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
    include("footer.php");
    ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</div>
</body>
</html>