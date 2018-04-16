<html>
    <head>
        <?php include "head.php"; ?>
        <title>The Dev's Story - Games</title>
    </head>

    <body class="bgcolor">
        <?php include "nav.php";
        ?>
        <div class="container contentpage contentwidth">
            <div class="item">
                <ol class="breadcrumb">
                    <li><a href="../games.php">Games</a></li>
                </ol>
                <h1 class="whitetext"> Games </h1>
                <hr>
                <div class="panel panel-default">
                    <div class="carousel" id="gamesCarousel" data-ride="carousel" data-interval="false">
                        <ol class="carousel-indicators black indicators-color">
                            <li data-target="#gamesCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#gamesCarousel" data-slide-to="1"></li>
                            <li data-target="#gamesCarousel" data-slide-to="2"></li>
                            <li data-target="#gamesCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="panel-body">
                                <div class="item active"><!--Item 1-->
                                    <div class="row">
                                        <a href="games/academiaschoolsimulator.php"><?php include "panels/panel_academiaschoolsimulator.php"; ?></a>
                                        <a href="games/adarnaalamatnimariablanca.php"><?php include "panels/panel_adarnaalamannimariablanca.php"; ?></a>
                                        <a href="games/book1pisces.php"><?php include "panels/panel_book1pisces.php"; ?></a>
                                        
                                    </div>
                                    <div class="row">
                                        <a href="games/brushstrokes.php"><?php include "panels/panel_brushstrokes.php";?></a>
                                        <a href="games/dragonsnack.php"><?php include "panels/panel_dragonsnack.php";?></a>
                                        <a href="games/dreamdefense.php"><?php include "panels/panel_dreamdefense.php";?></a>
                                    </div>
                                </div>
                                <div class="item"> <!--Item 2-->
                                    <div class="row">
                                        <a href="games/dungeonsouls.php"><?php include "panels/panel_dungeonsouls.php";?></a>
                                        <a href="games/endlessera.php"><?php include "panels/panel_endlessera.php";?></a>
                                        <a href="games/killtheplumber.php"><?php include "panels/panel_killtheplumber.php"; ?></a>
                                    </div>
                                    <div class="row">
                                        <a href="games/mathoriathelastsolution.php"><?php include "panels/panel_mathoriathelastsolution.php"; ?></a>
                                        <a href="games/politicalanimals.php"><?php include "panels/panel_politicalanimals.php"; ?></a>
                                        <a href="games/pretentiousgame.php"> <?php include "panels/panel_pretentiousgame.php"; ?> </a>
                                    </div>
                                </div>
                                <div class="item"> <!--Item 3-->
                                    <div class="row">
                                        <a href="games/reverie.php"> <?php include "panels/panel_reverie.php"; ?> </a>
                                        <a href="games/runrunsuperv.php"> <?php include "panels/panel_runrunsuperv.php"; ?> </a>
                                        <a href="games/sodes.php"><?php include "panels/panel_secretsofdeepearthshrine.php"; ?></a>
                                    </div>
                                    <div class="row">
                                        <a href="games/theletter.php"><?php include "panels/panel_theletter.php"; ?></a>
                                        <a href="games/towerfortress.php"><?php include "panels/panel_towerfortress.php"; ?></a>
                                        <a href="games/warriordefense.php"><?php include "panels/panel_warriordefense.php";?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </body>
    <?php include "scripts.php";?>
</html>