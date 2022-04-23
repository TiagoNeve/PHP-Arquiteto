<?php

namespace Solid\Service;

use Solid\Model\IAssistivel;

class Assistidor
{
  public function assistir(IAssistivel $conteudo)
  {
    $conteudo->assistir(); 
  }
}