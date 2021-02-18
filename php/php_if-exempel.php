<?php
//enkel if-sats
$age = 122;
$result = '';

if($age < 18) {
    $result = 'DU är inte myndig';
} else {
    $result = 'Du är myndig';
}

//ELSE-IF-sats
$daytime_now = date('H'); //returnerar timmen på dygnet
$daytime_result ='';

if($daytime_now >= 6 && $daytime_now <= 9) {
    $daytime_result = 'god morgon';
} elseif($daytime_now >= 10 && $daytime_now <= 12) {
    $daytime_result = 'God förmiddag';
} else {
    $daytime_result = 'God dag';
}

$user = 'Paul';




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP IF-satsen</title>
</head>
<body>
    <?php echo $result; ?>
    <p><?php echo $daytime_result; ?></p>
</body>
</html>