<?php

namespace DesignPattern;

use DesignPattern\Impostos\IImposto;

// Exemplo de classe que tem grande chance de crescer para sempre
/**
 * Portanto, foi utilizado o Design Pattern Strategy nesse caso, que seria o ato de extrair os parâmetros para uma classe que implementa a mesma interface, mas com comportamentos diferentes
 * Logo, cada classe implementa essa regra de negócio diferente e caso seja necessário ampliar, basta criar uma nova classe com a mesma interface, modificando apenas a regra de negócio.
 */
class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, IImposto $imposto): float
  {
    return $imposto->calculaImposto($orcamento);
  }
}