<?php

class CalculadorPontuacao
{
  public function recuperarPontuacao($conteudo)
  {
    if ($conteudo instanceof Curso) {
      return 100;
    } else if ($conteudo instanceof AluraMais) {
      return $conteudo->minutosDeDuracao() * 2;
    } else {
      throw new \DomainException('Errozão aqui');
    }
  }
}