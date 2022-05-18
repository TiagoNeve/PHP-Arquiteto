<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

class Iss implements IImposto
{
  public function calculaImposto(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.06;
  }
}