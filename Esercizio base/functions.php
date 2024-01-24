<!-- MILESTONE 2 spostiamo la logica in un file `functions.php` che includeremo poi nella pagina principale. -->
<?php
$lungpsw = $_GET['lunghezza'];

function generaPasswordCasuale($lungpsw)
{
    $caratteriPermessi = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';
    $lunghezzaCaratteri = strlen($caratteriPermessi);
    $password = '';

    //Ciclo sulla lunghezza inserita dall'utente
    for ($i = 0; $i < $lungpsw; $i++) {
        $indiceCasuale = rand(0, $lunghezzaCaratteri - 1);
        $password .= $caratteriPermessi[$indiceCasuale];
    }

    return $password;
}
// Verifico se la lunghezza e' settata, allora:
if (isset($_GET['lunghezza'])) {
    $lunghezzaPassword = intval($_GET['lunghezza']); //Mi faccio ritornare un'intero

    // Condizione per farsi' che la lunghezza sia valida (positiva e non troppo grande(128 in base ai BIT))
    if ($lunghezzaPassword > 0 && $lunghezzaPassword <= 128) {
        // Genera la password casuale
        $passwordCasuale = generaPasswordCasuale($lunghezzaPassword);
        echo "La tua password casuale è: $passwordCasuale";
    } else {
        echo "La lunghezza della password deve essere un numero positivo non troppo grande.";
    }
} else {
    echo "Devi fornire la lunghezza della password.";
}
