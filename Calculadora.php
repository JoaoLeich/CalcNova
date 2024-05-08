<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body id="all">

<h2 id="calc">Calculadora + -</h2>

<form action="" method="get" id="CalcForm" name="CalcForm">

    <label for="Numero1">Numero: </label>
    <input type="number" name="Numero1" id="Numero1">

    <label for="Operacao"></label>

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


    <?php 

require_once 'Operacao.php';
include 'SalvarHistorico.php';
require_once 'Funcoes.php';


$val1 = isset($_GET['Numero1']) ? $_GET['Numero1'] : null;

$val2 = isset($_GET['Numero2']) ? $_GET['Numero2'] : null;

$oper = isset($_GET['Operacao']) ? $_GET['Operacao'] : null;

$arrGlobal = array();

echo "<div id=\"result\">";

if(isset($_GET['Calculo'])){

$frase = Oper($oper,$val1,$val2); 

echo "Resultado: ".$frase;

$arr = SaveHistory($frase);  

$arrGlobal = $arr;

echo "</div>";
}

if(isset($_GET['ApagarHistorico'])){

    ClearHistory();

}

if(isset($_GET['Salvar'])){

    SaveOperation($val1,$val2,$oper);

}

function ReturnAllValue(){

    $total = 0;

    if(isset($_SESSION['num1']) && isset($_SESSION['num2']) && isset($_SESSION['oper'])){

        $num1 = $_SESSION['num1'];
        $num2 = $_SESSION['num2'];
        $oper = $_SESSION['oper'];
    

        for ($i=0; $i < count($num1); $i++) { 
            
            $total +=  ValueOper($oper[$i],$num1[$i],$num2[$i]);

        }

    }

    $_SESSION['num1'] = null;
    $_SESSION['num2'] = null;
    $_SESSION['oper'] = null;

    return $total;

}

if(isset($_GET['pegarvalores'])){

    echo ReturnAllValue();

}

if(isset($_GET['M'])){

    if($val1 != null && $val2 != null && $oper != null){
    
        SaveOperation($val1,$val2,$oper);

    }else{

     echo ReturnAllValue();

    }



}


?>


<div id="parent">    
    <div>
    <button type="submit" name="Calculo" class="btn btn-primary">Calcular</button>
    </div>

    <div>
    <button type="submit" name="ApagarHistorico"  class="btn btn-danger">Apagar Historico</button>
    </div>

    <div>
    <button type="submit" name="Salvar" class="btn btn-success">Salvar</button>
    </div>

    <div>
    <button type="submit" name="pegarvalores" class="btn btn-success">Pegar Valores</button>
    </div>

    <div>
    <button type="submit" name="M" class="btn btn-warning">M</button>
    </div>
</div>

</form>

</br>

<ul id="historico">


<p id="Frase">Historico</p>
<?php


ShowArrayDescOrder($arrGlobal);

?>

</ul>

</body>

</html>


