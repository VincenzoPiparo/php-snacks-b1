<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- ## Snack 1
Creiamo un array contenente le partite di basket di
un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa 
e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

    <?php 
    // Creation an array with matches
        $matches =[
            [
                'home' => 'Pallacanestro Venezia',
                'homePoints' => 76,
                'awayFromHome' => 'Dinamo Sassari',
                'pointsAwayFromHome' => 85
            ],
            [
                'home' => 'Pallacanestro Treviso',
                'homePoints' => 50,
                'awayFromHome' => 'Napoli Basket',
                'pointsAwayFromHome' => 63
            ],
            [
                'home' => 'Stella Azzura Roma',
                'homePoints' => 88,
                'awayFromHome' => 'Pallacanestro Amatori Udine',
                'pointsAwayFromHome' => 46
            ],
            [
                'home' => 'Pallacanestro Brescia',
                'homePoints' => 45,
                'awayFromHome' => 'Pallacanestro Reggiana',
                'pointsAwayFromHome' => 90
            ],
        ]
    ?>

    <h1>Matches Basketball</h1>
    <?php for($i = 0; $i < count($matches); $i++) { ?>
        <?php $games = $matches[$i]; ?>
        <div>
            <!-- Stampare a schermo usando l'echo i risultati delle partite -->
            <h3> <?php echo $games ['home']; ?> - <?php echo $games ['awayFromHome']; ?></h3>
            <p> <?php echo $games['homePoints']; ?> - <?php echo $games ['pointsAwayFromHome']; ?></p>
        </div>
        <?php }  ?>
</body>
</html>