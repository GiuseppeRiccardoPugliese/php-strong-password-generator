<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    require_once __DIR__ . '/functions.php';
    session_start();
    $passwordCasuale = $_SESSION["psw"];
    ?>
</head>

<body>
    <h1>La tua password sar&agrave;: <?php echo $passwordCasuale ?></h1>
</body>

</html>