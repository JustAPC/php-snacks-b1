<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà
Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e
la media dei voti di ogni alunno.  -->

<?php
$alunni = [
    [
        "nome" => "Paolo",
        "cognome" => "Rossi",
        "voti" => [
            9 , 8 , 8 , 7
        ]
        ],
    [
        "nome" => "Mario",
        "cognome" => "Biondi",
        "voti" => [
            4 , 5 , 5 , 2
        ],
        ],
    [
        "nome" => "Francesco",
        "cognome" => "Esposito",
        "voti" => [
            7 , 6 , 5 , 6
        ]
    ]
        ];

var_dump ($alunni);

function listaAlunni($alunni){
    foreach($alunni as $alunno){
        $mediaVoti = array_sum($alunno['voti']) / count($alunno['voti']);
        echo '<h2>'.$alunno['nome'].' '.$alunno['cognome'].'</h2>'.'<p>'.'Media dei voti: '.$mediaVoti.'</p>';
    }
}

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
    <div>
        <?php listaAlunni($alunni) ?>
    </div>
</body>

</html>
</html>