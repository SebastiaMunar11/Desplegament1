<?php

if (isset($_COOKIE['contador'])){
    setcookie('contador', $_COOKIE['contador']+1);
    echo "Número de visitas: ".$_COOKIE['contador'];
} else{
    setcookie('contador', 1);
    echo "Bienvenido por primera vez a nuestra página";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    
</body>
</html>