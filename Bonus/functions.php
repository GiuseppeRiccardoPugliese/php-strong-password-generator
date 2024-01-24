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
