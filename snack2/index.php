<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare 
(cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
    <?php
            $name = $_GET['name'];
            $email = $_GET['email'];
            $age = $_GET['age'];

            // var_dump($name);
            // var_dump($email);
            // var_dump($age);

            $nome = strlen($name);
            var_dump($nome);

            $anni= is_numeric($age);
            var_dump($anni);
        ?>

    <h2> 
    Name: <?php if($nome > 3 && strpos($email, '@') && $anni && strpos($email, '.')) { ?> 
        <h3> Access Complete </h3>
        <?php } else { ?>
            <h3>Access Denied </h3>
        <?php } ?>   
    </h2>
       
</body>
</html>