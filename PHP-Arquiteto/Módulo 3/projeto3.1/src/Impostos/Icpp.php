<?php

namespace DesignPattern\Descontos;

use DesignPattern\Impostos\IImposto;
use DesignPattern\Orcamento;

class Icpp implements IImposto
{
  public function calculaImposto(Orcamento $orcamento): float
  {
    if ($orcamento->valor > 500) {
      return $orcamento->valor * 0.03;
    }

    return $orcamento->valor * 0.02;
  }
}