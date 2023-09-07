<?php

$censura = $_POST['censura'] ?? null;
$testo = $_POST['testo'] ?? null;
$testo_censurato = str_replace($censura, '****', $testo);

?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Elaborazione Badwords</title>
</head>

<body>
    <div class="container">
        <div class="container m-5">
            <h1>Testo analizzato</h1>
            <p><?php echo $testo ?></p>
        </div>

        <div class="container m-5">
            <h1>Testo censurato</h1>
            <p><?php echo $testo_censurato ?></p>

        </div>
    </div>
</body>

</html>