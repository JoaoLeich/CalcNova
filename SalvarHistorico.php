<?php 

    session_start();

    

function SaveHistory($calc){

    session_destroy();

    if(isset($_SESSION['operacao'])){

    $arrayzao = $_SESSION['operacao'];

    array_push($arrayzao, $calc);
    
    $_SESSION['operacao'] = $arrayzao;

    return $arrayzao;
    
    print_r($arrayzao);

    }
    else{

        $_SESSION['operacao'] = BeginArray();

        $arrayzao = $_SESSION['operacao'];

        array_push($arrayzao, $calc);
        
        $_SESSION['operacao'] = $arrayzao;
        
        print_r($arrayzao); 
        
        
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