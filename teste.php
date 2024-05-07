<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php 

session_start();

$arrayzao = $_SESSION['operacao'];

array_push($arrayzao, "testenovo");

$_SESSION['operacao'] = $arrayzao;

print_r($arrayzao);



?>