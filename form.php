<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Badwords</title>
</head>

<body>
    <div class="container d-flex justify-content-center text-center">
        <form action="./reciver.php" method="post">
            <div class="m-5">
                <label class="d-flex justify-content-center p-2">Censura</label>
                <textarea name="censura" rows="1" cols="50"></textarea>
            </div>

            <div class="m-5">
                <label class="d-flex">Inserisci testo...</label>
                <textarea name="testo" cols="80" rows="10"></textarea>
            </div>
            <input class="bg-success" type="submit" value="Invia">

        </form>
    </div>
</body>

</html>