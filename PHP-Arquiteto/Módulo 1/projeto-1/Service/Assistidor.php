<?php

namespace Solid\Service;

use Solid\Model\IPontuavel;

class Assistidor
{
  public function assistir(IPontuavel $conteudo)
  {
    $conteudo->assistir(); 
  }
}