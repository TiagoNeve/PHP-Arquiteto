<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

class Icms implements IImposto
{
  public function calculaImposto(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.1;
  }
}