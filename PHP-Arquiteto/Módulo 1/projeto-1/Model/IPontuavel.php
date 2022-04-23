<?php

namespace Solid\Model;

interface IPontuavel
{
  public function recuperarPontuacao(): int;
  public function assistir(): void;
}
