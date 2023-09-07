<?php

$censura = $_POST['censura'] ?? null;
$testo = $_POST['testo'] ?? null;
$testo_censurato = str_replace($censura, '****', $testo);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Elaborazione Badwords</title>
</head>

<body>
    <div class="container m-5">
        <h1>Testo analizzato</h1>
        <p><?php echo $testo ?></p>
    </div>

    <div class="container m-5">
        <h1>Testo censurato</h1>
        <p><?php echo $testo_censurato ?></p>

    </div>
</body>

</html>