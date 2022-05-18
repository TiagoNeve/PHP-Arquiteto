<?php

namespace DesignPattern;

use DesignPattern\Impostos\IImposto;

// Exemplo de classe que tem grande chance de crescer para sempre
class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, IImposto $imposto): float
  {
    return $imposto->calculaImposto($orcamento);
  }
}