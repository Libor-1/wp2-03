<?php
$eura = filter_input(INPUT_POST, 'eura');
$czk = 27;
$sub = filter_input(INPUT_POST, 'odeslat');
$switch = filter_input(INPUT_POST, 'switch');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 <?php

 if (isset($sub)) {
    if ($switch == 2) { ?>
    <?= $eura ?> Eur je <?= $eura * $czk ?> Kč
    <?php
    } elseif ($switch == 1) { ?>
    <?= $eura ?> Kč je <?= $eura / $czk ?> Eur
    <?php
    }

 } else { ?>
     <form action="wp2-3.php" method="post">
 Peníze: <input type="text" name="eura" id="eura"><br>
    CZK to EUR: <input type="radio" name="switch" value="1" id="switch"><br>
    EUR to CZK: <input type="radio" name="switch" value="2" id="switch"><br>
   <input type="submit" value="odeslat" name="odeslat">
</form>

<?php
 } ?>






</body>
</html>