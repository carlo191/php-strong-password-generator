<?php
session_start();
$password=$_SESSION['password'] ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di password</title>
</head>
<body>
    <h1>La Password generata è di <?php echo strlen ($password) ?> caratteri</h1>
<pre>
    <?php
    echo  htmlspecialchars($password) . "<br>";
    ?>
    <nav><a href="index.php">Torna indietro</a></nav>

    

<pre>
    
</body>
</html>