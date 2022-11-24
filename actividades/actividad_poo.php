<?php
    class Persona{
        public string $nombre;
        public int $edad;

        public function __construct(string $nombre, int $edad){
            $this->nombre=$nombre;
            $this->edad=$edad;
        }

        public function imprimir(){
            echo $this->nombre . "\n" . $this->edad . "\n";
        }
    }
    
    class Ciudadano extends Persona{
        public string $deposito;

        public function __construct($nombre, $edad, $deposito){
            parent::__construct($nombre, $edad);
            $this->deposito = $deposito;
        }

        public function imprimir(){
            parent::imprimir();
            echo $this->deposito . "\n";
        }

        public function impuestos(){
            if($this->deposito > 3000){
                echo 'El ciudadano '.$this->nombre.' debe pagar impuestos';
            }else{
                echo 'El ciudadano '.$this->nombre.' no debe pagar impuesto';
            }
        }
    }

    $ciudadano= new Ciudadano("Alejandro", 21, 3540);
    $ciudadano->imprimir();
    echo '<br>';
    $ciudadano->impuestos();

?>