<?php

namespace DesignPattern\Descontos;

use DesignPattern\Orcamento;

class SemDesconto extends Desconto
{
  public function __construct() {
    parent::__construct(null);
  }
  
  public function calculaDesconto(Orcamento $orcamento): float
  {
    return 0;
  }
}