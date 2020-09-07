<?php
//Om $_GET[-submit] finns i headern
if(isset($_GET['submit'])) {
  //Spara datat i variablar
  $firstname = $_GET['firstname'];
  $age = $_GET['age'];
  //om fältena är tomma sätter vi annan data
  if(empty($firstname)) { $firstname = "Stranger"; }
  if(empty($age)) { $age = "Null"; }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP formulärhantering</title>
  </head>
  <body>
    <?php if(isset($_GET['submit'])) { ?>
      <p>Hej <?php echo $firstname; ?>,
      du är <?php echo $age; ?> år gammal.  </p>
    <?php } ?>
  </body>
</html>
