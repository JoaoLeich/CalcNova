<?php 


    session_start();

function SaveOperation($Num1,$Num2,$Oper){

    if(isset($_SESSION['num1']) && isset($_SESSION['num2']) && isset($_SESSION['oper'])){

        $num1 = $_SESSION['num1'];
        $num2 = $_SESSION['num2'];
        $oper = $_SESSION['oper'];
    
        array_push($num1, $Num1);
        array_push($num2, $Num2);
        array_push($oper, $Oper);
        
        $_SESSION['num1'] = $num1;
        $_SESSION['num2'] = $num2;
        $_SESSION['oper'] = $oper;
        
    
        }
        else{
    
        $_SESSION['num1'] = BeginArray();
        $_SESSION['num2'] = BeginArray();
        $_SESSION['oper'] = BeginArray();
               
            
        $num1 = $_SESSION['num1'];
        $num2 = $_SESSION['num2'];
        $oper = $_SESSION['oper'];

        array_push($num1, $Num1);
        array_push($num2, $Num2);
        array_push($oper, $Oper);
        
        $_SESSION['num1'] = $num1;
        $_SESSION['num2'] = $num2;
        $_SESSION['oper'] = $oper;

    
        }
    
}

function SaveHistory($calc){

    if(isset($_SESSION['operacao'])){

    $arrayzao = $_SESSION['operacao'];

    array_push($arrayzao, $calc);
    
    $_SESSION['operacao'] = $arrayzao;

    return $arrayzao;
    

    }
    else{

        $_SESSION['operacao'] = BeginArray();

        $arrayzao = $_SESSION['operacao'];

        array_push($arrayzao, $calc);
        
        $_SESSION['operacao'] = $arrayzao;
        
        
    return $arrayzao;

    }

}

function BeginArray(){

    return $arr = array();
}

function ClearHistory(){

    session_destroy();

}

?>