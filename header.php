<!-- header -->

<header>

    <!-- navbar -->

    <div class="row">
        <div class="navbar">
            <div class="container-fluid">
                <div class="navbar-header navbar-default text-left">
                    <form action="#" method="get" class="clearfix">
                        <input type="search" placeholder="Поиск" name="main-search">
                        <input type="image" src="img/search.svg" alt="Поиск">
                    </form>
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#responsive-menu">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <nav class="collapse navbar-collapse"
                     id="responsive-menu">
                    <a class="search" href="page-2.php"><img src="img/icon-buy.png"></a>

                    <?php
                    include('array.php');

                    echo '<ul class="nav navbar-nav">';
                    foreach ($nav as $parent) {

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
        </div>
    </div>
</header>