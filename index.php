<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
    <title>Blackjack-PHP</title>

</head>
<body>
<?php

spl_autoload_register('autoLoader');

function autoLoader($className): void
{
    $path = 'classes/';
    $extension = ".class.php";
    $fullpath = $path . $className . $extension;

    require_once $fullpath;
}

session_start();

//$blackjack = new Blackjack;

if (isset($_POST['new'])) {
    unset($blackjack);
    session_unset();
}

if (!isset($_SESSION['blackjack'])) {
    $blackjack = new Blackjack();
    $_SESSION['blackjack'] = serialize($blackjack);
} else {
    $blackjack = unserialize($_SESSION['blackjack'], [Blackjack::class]);
}

if (isset($_POST['hitBtn'])) {
    $blackjack->getPlayer()->hit($blackjack->getDeck());

    if (isset($_POST['surrenderBtn'])) {
        $blackjack->getPlayer()->hasLost();
    }

    if (isset($_POST['stayBtn'])) {
        $blackjack->getDealer()->hasLost();
    }


    $_SESSION['blackjack'] = serialize($blackjack);
}


?>

<!--   Page   -->
<div class="container">

    <!--   HEADER   -->
    <div class="row">
        <div class="col-xl">
            <div class="header">
                <h1>G.WebDev BlackJack</h1>
            </div>
        </div>
    </div>

    <!--   CONTENT   -->
    <div class="row">
        <div class="col-xl">
            <div id="PlayerCards">
                <?php


                //                echo "<pre>";
                //                var_dump($blackjack->getPlayer()->hit($blackjack->getDeck()));
                //                echo "</pre>";
                //SHOW PLAYER CARDS
                echo "<br>";
                foreach ($blackjack->getPlayer()->getCards() as $card) {
                    echo "<span style='font-size:120px'>" . $card->getUnicodeCharacter(true) . "</span>";
                }
                // SHOW PLAYER HAND SCORE
                echo "<br>";
                echo "<span style='font-size: 30px'>" . "Player &nbsp;&nbsp;" . $blackjack->getPlayer()->getPlayerScore() . "</span>";
                if ($blackjack->getPlayer()->hasLost(true)) {
                    echo "Player Lose";
                }
                ?>
            </div>
        </div>
        <div class="col-xl">
            <div id="dealerCards">
                <?php
                //SHOW DEALER CARDS
                echo "<br>";
                foreach ($blackjack->getDealer()->getCards() as $card) {
                    echo "<span style='font-size:120px'>" . $card->getUnicodeCharacter(true) . "</span>";
                }
                //SHOW DEALER HAND SCORE
                echo "<br>";
                echo "<span style='font-size: 30px'>" . "Dealer &nbsp;&nbsp;" . $blackjack->getDealer()->getDealerScore() . "</span>";
                ?>
            </div>
        </div>
    </div>
    <!--   Buttons   -->
    <div class="row">
        <div class="col-xl">
            <div class="buttons">
                <form action="" method="post">
                    <input class="btn btn-primary" type="submit" name="new" value="NEW GAME"/>
                    <input class="btn btn-primary" type="submit" name="hitBtn" value="HIT"/>
                    <input class="btn btn-primary" type="submit" name="standBtn" value="STAND"/>
                    <input class="btn btn-danger" type="submit" name="surrenderBtn" value="SURRENDER"/>
                </form>
            </div>
        </div>
    </div>
    <!--       FOOTER-->
    <div class="row">
        <div class="col-xl">
            <div class="footer">
                <h6>G.WebDev&#169; Creations</h6>
            </div>
        </div>
    </div>
</div>

</body>
</html>