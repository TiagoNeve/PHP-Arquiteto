<?php

namespace DesignPattern;
// Exemplo de classe que tem grande chance de crescer para sempre
class CalculadoraDeImpostos
{
  public function calcula(Orcamento $orcamento, string $nomeImposto): float
  {
    switch ($nomeImposto)
    {
      case "ICMS":
        return $orcamento->valor * 0.1;

      case "ISS":
        return $orcamento->valor * 0.06;
    }
  }
}