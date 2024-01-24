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

    <!-- MILESTONE 2 -->
    <?php
    require_once __DIR__ . '/functions.php';
    ?>
</body>

</html>