<?php
    class Jugador{
        public $nombre;
        public $posicion;
        public $numero;

        //Metodos de una clase
        public function entrenar(){
            echo $this->nombre ." está entrenando";
        }

        public function jugar(){
            echo $this->nombre ." está jugando";
        }

        //Constructor
        public function __construct($nombre, $posicion, $numero){
            $this->nombre = $nombre;
            $this->posicion = $posicion;
            $this->numero = $numero;
        }
    }

    //Instancias de una clase
    $jugador1=new Jugador("Neymar", "Extremo", 10);
    // $jugador1->entrenar();

    echo '<pre>';
    var_dump($jugador1);
    echo '</pre>';

    $jugador2=new Jugador("Thiago Alcantara", "Mediocampista", 6);
    // $jugador2->jugar();

    echo '<pre>';
    var_dump($jugador2);
    echo '</pre>'
?>