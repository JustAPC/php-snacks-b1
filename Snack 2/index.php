<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 
 
$name = ( isset($_GET['name']) ) ? $_GET['name'] : '' ;
$mail = ( isset($_GET['mail']) ) ? $_GET['mail'] : '' ;
$age = ( isset($_GET['mail']) ) ? $_GET['mail'] : '' ;

$age = intval ($age);

$accessGranted = "Accesso riuscito";
$accessDenied = "Accesso negato";

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
        <form method="GET" style="margin-top: 10px">
            <label for="name">Name:</label>
            <input type="text" name="name">

            <label for="mail">Mail:</label>
            <input type="text" name="mail">

            <label for="age">Age:</label>
            <input type="text" name="age">
            <button type="submit">Invia</button>
        </form>
    </div>
    <div>
        <?php 
         if(strlen($name) > 3 && strpos($mail, '@') == true && strpos($mail, '.') == true && is_numeric($age)){
            echo $accessGranted;
        } else {
            echo $accessDenied;
        };
        ?>
    </div>
    </form>
</body>
</html>