<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- ## Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<h1>Generate an array with random numbers that are not repeated</h1>
<?php 
        $numbers = [];

        for($i = 0; $i < 15; $i++) {
            $random_number = rand(1, 100);

            if(!in_array($random_number, $numbers)) {
                $numbers = $random_number;
            }

            echo $numbers . ' ';
        }
    ?>
</body>
</html>