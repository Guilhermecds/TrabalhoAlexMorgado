<?php
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="recupera-dados.php" method="post">
            <label for="nome">Nome:</label>
            <input id="nome" type="text" name="nome">

            <label for="email">Email:</label>
            <input id="email" type="text" name="email">

            <label for="idade">idade:</label>
            <input id="idade" type="number" name="idade">

            <label for="hobbie">hobbie:</label>
            <input id="hobbie" type="text" name="hobbie">

            <input type="submit" value="Save">
        </form>
    </body>
    </html>