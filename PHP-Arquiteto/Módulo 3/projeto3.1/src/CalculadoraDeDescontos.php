<?php

namespace DesignPattern;

use DesignPattern\Descontos\DescontoMaisDe500Reais;
use DesignPattern\Descontos\DescontoMaisDe5Itens;
use DesignPattern\Descontos\SemDesconto;
use DesignPattern\Orcamento;

class CalculadoraDeDescontos
{
  public function calculaDescontos(Orcamento $orcamento): float
  {
    $cadeiaDeDescontos = new DescontoMaisDe5Itens(
      new DescontoMaisDe500Reais(
        new SemDesconto()
      )
    );

    return $cadeiaDeDescontos->calculaDesconto($orcamento);
  }
}