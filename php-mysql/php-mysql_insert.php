<?php
include('db-connect.php');

if(isset($_POST) && !empty($_POST)) {
   $sql = "INSERT INTO dhg18students (firstname, lastname) 
            VALUES(:firstname, :lastname)";
    $result = $conn->prepare($sql);
    $res = $result->execute(
        array(
            ':firstname' => $_POST['firstname'],
            ':lastname' => $_POST['lastname']
        )
    );
    
    if($res) {
        $msg = "Ny Studerande tillagd!";
    } else {
        $msg = "Nånting gick fel...";
    }
}

$sql_select = "SELECT * FROM dhg18students";
$stmt = $conn->query($sql_select);
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
    <h1>Tillägg studerande</h1>
    
    <?php if(isset($msg)) { echo '<h3>' . $msg . '</h3>'; } ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p>Förnamn <input type="text" name="firstname"></p>
        <p>Efternamn <input type="text" name="lastname"></p>
        <p><button type="submit">tillägg studerande</button></p>
    </form>
<h3>studeranden</h3>
<ul>
    <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
    <li>
        <?php echo $row['firstname'] . ' ' .$row['lastname']; ?>
    </li>
    <?php } ?>
</ul>
</body>
</html>