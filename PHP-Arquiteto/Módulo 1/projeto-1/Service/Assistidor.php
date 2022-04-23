<?php

class Video
{
  /** @var bool */
  protected $assistido = false;
  /** @var string */
  protected $nome;
  /** @var \DateInterval */
  protected $duracao;

  public function __construct(string $nome)
  {
    $this->nome = $nome;
    $this->assistido = false;
    $this->duraca = \DateInterval::createFromDateString('0');
  }

  
}