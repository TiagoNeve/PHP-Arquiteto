<?php

namespace DesignPattern\Descontos;

use DesignPattern\Impostos\IImposto;
use DesignPattern\Orcamento;

class Ikcv implements IImposto
{
  public function calculaImposto(Orcamento $orcamento): float
  {
    if ($orcamento->valor > 300 && $orcamento->quantidadeItens > 3 ) {
      return $orcamento->valor * 0.04;
    }

    return $orcamento->valor * 0.025;
  }
}