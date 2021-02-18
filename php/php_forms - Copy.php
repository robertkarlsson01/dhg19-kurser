<?php
if(isset($_POST['submit_output'])) {
  $output = $_POST['output'];
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>PHP formulär - method GET</title>
</head>

<body>
  <h3>Ett GET formulär</h3>
  <form action="welcome.php" method="get">
    <p><label for="firstname">Förnamn</label>
      <input type="text" name="firstname" id="firstname">
    </p>
    <p><label for="age">Ålder</label>
      <input type="number" name="age" id="age">
    </p>
    <button type="submit" name="submit">Skicka</button>
  </form>
  <h3>Formulär 2</h3>

  <?php if(isset($_POST['submit_output'])) { echo $output; } ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <p>
      <input type="text" name="output" placeholder="skriv text" />
      <button type="submit" name="submit_output">Skriv ut</button>
      </p>
  </form>
</body>

</html>
