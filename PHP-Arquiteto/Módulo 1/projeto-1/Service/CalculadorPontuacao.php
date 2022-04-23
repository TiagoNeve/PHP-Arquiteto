<?php

namespace Solid\Service;

use Solid\Model\IPontuavel;

class CalculadorPontuacao
{
  public function recuperarPontuacao(IPontuavel $conteudo)
  {
    return $conteudo->recuperarPontuacao();
  }
}