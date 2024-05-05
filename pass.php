<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container text-center mt-5" >
     <h1>La tua nuova password è: <span class="text-danger"><?= $_SESSION["pass"] ?></span></h1>
     <button class="btn btn-primary"><a class="text-decoration-none text-white"href="./index.php">Genera una nuova password</a></button>
</div>
</body>
</html>