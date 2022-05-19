<?php

namespace DesignPattern\Descontos;

use DesignPattern\Orcamento;
use DesignPattern\Impostos\ImpostoCom2Aliquotas;

class Icpp extends ImpostoCom2Aliquotas
{
  protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
  {
    return $orcamento->valor > 500;
  }

  protected function calculaTaxaMaxima(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.03;
  }

  protected function calculaTaxaMinima(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.02;
  }
}