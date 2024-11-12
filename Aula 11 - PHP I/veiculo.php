<?php
    class Veiculo {
        private $modelo;
        private $marca;
        private $cor;
        private $ano;
        public $preco;
        public $status;

        public function __construct($modelo, $marca, $cor, $ano,$preco, $status){
            $this->modelo= $modelo;
            $this->marca= $marca;
            $this->cor= $cor;
            $this->ano= $ano;
            $this->preco= $preco;
            $this->status= $status;
        }

        public function setMarca($marca){
            $this->marca=$marca;
        }

        public function getMarca(){
            return $this->marca;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function getCor(){
            return $this->cor;
        }
        public function getAno(){
            return $this->ano;
        }

    }


    $ford = new Veiculo ("EcoSport","Ford","Prata", "2024",120.000, "Disponivel");

    echo $ford->getMarca();
    echo "<br>";
    echo $ford->getModelo();
    echo "<br>";
    echo $ford->getCor();
    echo "<br>";
    echo $ford->getAno();
        


?>
