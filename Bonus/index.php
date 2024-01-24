<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Psw Gen</title>

    <?php
    session_start();
    ?>
</head>

<body>
    <!-- MILESTONE 1 Creare un form che invii in `GET` la lunghezza della password  -->
    <form>
        <label for="lunghezza">Lunghezza Password:</label>
        <input type="number" name="lunghezza" required>
        <button type="submit">Genera Password</button>
    </form>

    <!-- MILESTONE 2 -->
    <?php
    require_once __DIR__ . '/functions.php';

    // Verifico se la lunghezza e' settata, allora:
    if (isset($_GET['lunghezza'])) {
        $lunghezzaPassword = intval($_GET['lunghezza']); //Mi faccio ritornare un'intero

        // Condizione per farsi' che la lunghezza sia valida (positiva e non troppo grande(128 in base ai BIT))
        if ($lunghezzaPassword > 0 && $lunghezzaPassword <= 128) {
            // Genera la password casuale
            $passwordCasuale = generaPasswordCasuale($lunghezzaPassword);

            //Redirect alla page pass_show.php
            //MILESTONE 3 BONUS
            $_SESSION["psw"] = $passwordCasuale;
            header('Location: ./pass_show.php');
        } else {
            echo "La lunghezza della password deve essere un numero positivo non troppo grande.";
        }
    } else {
        echo "Devi fornire la lunghezza della password.";
    }

    ?>
</body>

</html>