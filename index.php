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

    $_SESSION['blackjack'] = serialize($blackjack);
}

//if (isset($_POST['standBtn'])) {
//    $blackjack->getPlayer()->
//}


?>

<div class="container">

    <div class="row">
        <div class="col-xl">
            <div class="header">
                <h1>G.WebDev BlackJack</h1>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xl">
            <div id="PlayerCards">
                <?php
                //SHOW PLAYER CARDS
                foreach ($blackjack->getPlayer()->getCards() as $card) {
                    echo "<span style='font-size:120px'>" . $card->getUnicodeCharacter(true) . "</span>";
                }
                // SHOW PLAYER HAND SCORE
                echo "<br>";
                echo "<span style='font-size: 28px'>" . "Player &nbsp;&nbsp;" . $blackjack->getPlayer()->getPlayerScore() . "</span>";
                ?>
            </div>
        </div>

        <div class="col-xl">
            <div id="dealerCards">
                <?php
                //SHOW DEALER CARDS
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

    <div class="row">
        <div class="col-xl">
            <form action="" method="post">
                <input class="btn btn-primary" type="submit" name="new" value="NEW GAME"/>
                <input class="btn btn-primary" type="submit" name="hitBtn" value="HIT"/>
                <input class="btn btn-primary" type="submit" name="standBtn" value="STAND"/>
                <input class="btn btn-danger" type="submit" name="surrenderBtn" value="SURRENDER"/>
            </form>
        </div
    </div>
</div>
</body>
</html>