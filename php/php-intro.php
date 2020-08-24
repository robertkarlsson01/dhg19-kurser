<?php
//kommentar: håll PHP-koden skilld från HTML
$name = 'Paul';
$school = 'Prakticum';
$age = 43; //heltal (och andra siffervärden) utan apostrofer/citat
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP intro</title>
</head>
<body>
    <h1>Min första PHP-snutt</h1>
    <p>Dagens Datum: <?php echo date('d.m.Y'); ?> </p>
    <h3>Hej <?php echo $name; ?> din ålder är: <?php echo $age; ?></h3>

</body>
</html>