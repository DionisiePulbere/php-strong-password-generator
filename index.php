<?php 
$passlen = isset($_GET['passlen']) ? intval($_GET['passlen']) : '';
var_dump($passlen);

function generatePassword($passlen){
$caract="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789_?*+&%!#@()[]{}^/£∂-";
$lenCaract=strlen($caract);

$passRand = "";
$i = 0;
while ($i < $passlen){
    $numRand = rand(0, $lenCaract - 1);
    $passRand.= $caract[$numRand];
    $i++;
}
return $passRand;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form method="get">
        <div class="container mt-5 d-flex align-items-center">
            <label for="passleng">Lunghezza della Password desiderata: </label>
            <input class="mx-4" type="number" name="passlen" id="passlen" >
            <button class="btn btn-primary" type="submit">Genera</button>
            <button class="btn btn-secondry ms-2" type="reset">Reset</button>
        </div>
    </form>
    
    <div class="container" > La tua nuova password è: <span class="text-danger"><?php echo generatePassword($passlen) ?></span></div>
</body>
</html>