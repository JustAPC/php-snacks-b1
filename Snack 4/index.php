<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

$arrayNumeri = [];

for ($i=0; count($arrayNumeri) < 15; $i++) { 
    do {
        $randomNumber = rand(1 , 20);
    } while (in_array($randomNumber, $arrayNumeri) == true);

    array_push($arrayNumeri, $randomNumber);
}

var_dump($arrayNumeri);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>