<?php

    function ShowArrayDescOrder($arr){

        if(count($arr) >= 0){

        for ($i = count($arr) - 1; $i >= 0 ; $i--) { 
            
            echo "<li>".$arr[$i]."</li>";
        }
    }
        return;

    }

?>