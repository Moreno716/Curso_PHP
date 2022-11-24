<?php
    function checkVote($nombre, $edad){
        if($edad>=18){
            echo "$nombre, puede ingresar a votar";
        }else{
            echo "$nombre, no puede ingresar porque tiene $edad años";
        }
    }
    $imprimir=checkVote("Pepe", 19);
    echo $imprimir;
?>