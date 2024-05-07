<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<form action="" method="get" id="CalcForm" name="CalcForm">

    <label for="Numero1">Numero: </label>
    <input type="number" name="Numero1" id="Numero1">

    <label for="Operacao">Selecione a Operacao: </label>

    <select name="Operacao" id="Operacao" form="CalcForm">
        <option value="-">Subtração</option>
        <option value="+">Adição</option>
        <option value="*">Multiplicação</option>
        <option value="/">Divisão</option>
        <option value="!">Fatoração</option>
        <option value="^">Potenciação</option>
    </select>

    <label for="Numero2">Numero: </label>
    <input type="number" name="Numero2" id="Numero2">

    <input type="submit" value="Calcular">

</form>

<?php 

    require_once 'Operacao.php';
    require_once 'SalvarHistorico.php';
    require_once 'Funcoes.php';
    
    $val1 = isset($_GET['Numero1']) ? $_GET['Numero1'] : null;

    $val2 = isset($_GET['Numero2']) ? $_GET['Numero2'] : null;
    
    $oper = isset($_GET['Operacao']) ? $_GET['Operacao'] : null;
     
    $frase = Oper($oper,$val1,$val2); 

    echo "</br>".$frase."</br>";

    $arr = SaveHistory($frase);    

?>

</br>

<ul>

<?php


ShowArrayDescOrder($arr);

?>

</ul>

<body>

</body>

</html>


