<?php

namespace DesignPattern;

use DesignPattern\Orcamento;

class CalculadoraDeDescontos
{
  public function calculaDescontos(Orcamento $orcamento): float
  {
    if($orcamento->quantidadeItens > 5) {
      return $orcamento->valor * 0.1;
    }

    return 0;
  }
}