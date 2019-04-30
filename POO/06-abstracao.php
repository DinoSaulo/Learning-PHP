<?php

abstract class Banco {
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco {
    public function Sacar($s) {
        $this->saldo -= $s;
        echo "<hr> Sacou: ".$s;
    }
    public function depositar($d) {
        $this->saldo += $d;
        echo "<hr> Depositou: ".$d;
    }
}

class Bradesco extends Banco {
    public function Sacar($s) {
        $this->saldo -= $s;
    }
    public function depositar($d) {
        $this->saldo += $d;
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->Sacar(250);
echo "<hr> Saldo: ".$itau->getSaldo();
$itau->depositar(900);
echo "<hr> Saldo: ".$itau->getSaldo();