<?php
require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Generatore Password Sicura</title>
</head>
<body>
    <h1>Generatore di Password Sicura</h1>

    <form method="GET" action="">
        <label for="length">Lunghezza password:</label>
        <input type="number" id="length" name="length" min="5" max="30" required
               value="<?php echo isset($length) ? htmlspecialchars($length) : ''; ?>">
        <button type="submit">Genera</button>
    </form>

    <hr>

    <?php if ($password != ''): ?>
        <h2>Password Generata:</h2>
        <p><strong><?php echo htmlspecialchars($password); ?></strong></p>
        <p>Lunghezza richiesta: <?php echo htmlspecialchars($length); ?></p>
    <?php endif; ?>
    
</body>
</html>
