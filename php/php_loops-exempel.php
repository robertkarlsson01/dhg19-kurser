<?php
//räknare för while
$i = 1;
$cars = array('Pösö', 'BMW', 'VW', 'Volvo');
$cars_amount = count($cars); //räknar antalet värden i en array

$mat = 'pasta, kebab, pizza, sushi';
$mat_array = explode(', ', $mat);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP LOOPS</title>
</head>
<body>
<ul>
    <?php while($i < 4) { ?>
    <li>rad <?php echo $i; ?></li>
    <?php $i++; } ?>
</ul>

<?php print_r($mat_array); ?>
<h3>For-loop</h3>
<ul>
<?php for($x=0;$x<$cars_amount;$x++) { ?>
    <li> <?php echo $cars[$x]; ?> </li>
<?php } //end for loop ?>
</ul>

<h3>Foreach</h3>
<?php foreach($cars as $value) { ?>
    <li><?php echo $value; ?></li>
<?php } ?>
</ul>
</body>
</html>