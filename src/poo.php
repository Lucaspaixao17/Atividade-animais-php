<?php

class Carro {
public $cor;
public $modelo;   
public $velocidade;
public $acelerar;

function acelerar($quando){
    $this -> velocidade += $quando;

}
function frear(){
    $this -> velocidade = (10);
}
function status(){
    echo $this ->modelo . " " . $this->cor . " esta a " . $this->velocidade . "hm/h\n"; 
}
}
$meu_carro = new Carro();
$meu_carro -> cor = "azul";
$meu_carro -> modelo = "Fiat";
$meu_carro -> acelerar(10);
$meu_carro -> status ();

$carro_vizinha = new Carro();