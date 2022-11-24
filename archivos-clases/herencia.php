<?php
    //Clase padre
    class SeleccionFutbol{
        public $id;
        public $nombre;
        public $edad;

        public function __construct($id, $nombre, $edad){
            $this->id=$id;
            $this->nombre=$nombre;
            $this->edad=$edad;
        }

        public function concentrarse(){
            echo $this->nombre." está en concentación";
        }

        public function viajar(){
            echo $this->nombre." está viajando";
        }
    }

    //Clase hija
    class Jugador extends SeleccionFutbol{
        public $posicion;
        public $numero;

        public function __construct($id, $nombre, $edad, $posicion, $numero){
            parent::__construct($id, $nombre, $edad);
            $this->posicion = $posicion;
            $this->numero = $numero;
        }

        public function entrenar(){
            echo $this->nombre ." está entrenando";
        }
    
        public function jugar(){
            echo $this->nombre ." está jugando";
        }
    }

    class Entrenador extends SeleccionFutbol{
        public $experiencia;

        public function __construct($id, $nombre, $edad, $experiencia){
            parent::__construct($id, $nombre, $edad);
            $this->experiencia=$experiencia;
        }

        public function dirigirEntreno(){
            echo $this->nombre ." está dirigiendo el entreno";
        }

        public function dirigirPartido(){
            echo $this->nombre ." está dirigiendo el partido";
        }
    }

    $jugador1=new Jugador(123, "Messi", 34, "Extremo", 30);
    $entrenador1=new Entrenador(345, "Pep", 44, 8);
    echo $jugador1->viajar();
    echo '<br>';
    echo $entrenador1->dirigirEntreno();
?>