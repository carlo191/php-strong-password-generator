<?php $password = '';

// Controllo se è stato passato un parametro "length" via GET e lo valido
if (isset($_GET['length'])) {
    $length = intval($_GET['length']);
    if ($length > 0) {
        // Definisco i caratteri disponibili
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';
        $specialChars = '!@#$%^&*()_+-=[]{}|;:,.<>?';

        $allChars = $uppercase . $lowercase . $numbers . $specialChars;

        // Genero la password
        for ($i = 0; $i < $length; $i++) {
            $randomPosition = rand(0, strlen($allChars) - 1);
            $randomCaracter = substr($allChars, $randomPosition, 1);
            $password .= $randomCaracter;
        }
    }
}


?>
