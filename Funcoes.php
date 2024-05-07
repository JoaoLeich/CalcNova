<?php

    function ShowArrayDescOrder($arr){

        for ($i = count($arr) - 1; $i >= 0 ; $i--) { 
            
            echo "<li>".$arr[$i]."</li>";
        }

        return;

    }

?>