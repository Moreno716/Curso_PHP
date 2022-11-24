<?php
    // $nombre=$_REQUEST("Ingresa tu nombre: ");
    $nombre="Pedro";
    $compra=350;

    if($compra < 50){
        $descuento=0.05;
    }elseif($compra >= 50 && $compra < 100){
        $decuento=0.1;
    }elseif($compra >= 100 && $compra <= 250){
        $descuento=0.15;
    }elseif($compra > 250 && $compra < 400){
        $descuento=0.2;
    }else{
        $descuento=0;
    }

    $precioFinal = $compra - $descuento;

    echo ('Hola, '. $nombre .' el valor de su compra es $'. $compra .' y con descuento es $'. $precioFinal);
?>