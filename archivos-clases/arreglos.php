<?php
    // $arreglo1=array("Elemento1", 2, "Elemento3", 4.3);

    // $arreglo2=["Elemento1", 2, "Elemento3", 4.3, true, false];

    $arreglo3=array(
        'nombre' => 'Juan',
        'edad' => 19,
        'celular' => 33214,
    );

    $arreglo3['email']='juandiegomc00@gmail.com';

    echo '<pre>';
    var_dump($arreglo3);
    echo '</pre>';

    //delete
    array_pop($arreglo3);
    echo '<pre>';
    var_dump($arreglo3);
    echo '</pre>';

    //encontrar
    echo '<pre>';
    var_dump(in_array(20, $arreglo3));
    echo '</pre>';

?>