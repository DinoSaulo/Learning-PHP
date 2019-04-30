<?php

class Veiculo {
    public $modelo;
    protected $cor; // pode ser acessada pela classe e pelas classes que erdam
    private $ano; // pode ser acessada apenas pela classe

    public function getAno(){
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }

    public function Andar(){
        echo "Andou";
    }

    public function Parar(){
        echo "Parou";
    }


    
}

class Carro extends Veiculo {

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function ligarLimpador() {
        echo "Limpando em 321";
    }

    public function mostrarAcao(){
        $this->Andar();
    }
}

class Moto extends Veiculo {

    public function getCor(){
        return $this->cor;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }

    public function darGrau() {
        echo "Dando grau em 321";
    }
}

$carro = new Carro();
$carro->modelo = "Tucson";
$carro->setCor("Vermelho");
$carro->setAno(2018);
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
var_dump($carro);

//$carro2 = new Veiculo();
//$carro2->mostrarAcao();