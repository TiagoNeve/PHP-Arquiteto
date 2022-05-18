<?php

namespace DesignPattern\Impostos;

use DesignPattern\Orcamento;

interface IImposto
{
  public function calculaImposto(Orcamento $orcamento): float; 
}