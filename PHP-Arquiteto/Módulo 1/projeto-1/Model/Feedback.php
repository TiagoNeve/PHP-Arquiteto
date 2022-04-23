<?php

namespace Solid\Model;

class Feedback
{
  private int $nota;
  private string|null $depoimento;

  public function __construct(int $nota, ?string $depoimento) 
  {
    if ($nota < 9 && empty($depoimento)) {
      throw new \DomainException('Depoimento obrigatório');
    }
    
    $this->nota = $nota;
    $this->depoimento = $depoimento;
  }
}