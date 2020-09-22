<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
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

    require $fullpath;
}

?>
<div class="container">
    <div class="header">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-6">
                <h1>BlackJack OOP PHP</h1>
            </div>
            <div class="col">
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col">
            </div>

            <div class="col-10">
                <?php
                $deck = new Deck();
                $deck->shuffle();

                $player = new Player($deck);
                $dealer = new Player($deck);


                foreach ($deck->getCards() as $card) {
                    echo "<span style='font-size:100px'>" . $card->getUnicodeCharacter(true) . "</span>";
                }
                ?>
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col-6">
                        <button type="button" class="btn btn-primary">HIT</button>
                        <button type="button" class="btn btn-primary">STAND</button>
                        <button type="button" class="btn btn-primary">SURRENDER</button>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</div>
</body>
</html>
