<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Psw Gen</title>
</head>

<body>
    <!-- MILESTONE 1 Creare un form che invii in `GET` la lunghezza della password  -->
    <form>
        <label for="lunghezza">Lunghezza Password:</label>
        <input type="number" name="lunghezza" required>
        <button type="submit">Genera Password</button>
    </form>

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
    ?>
</body>

</html>