<?php

namespace Calisthenics\Domain\Video;

class Video
{
  private bool $visible = false;
  private int $ageLimit;

  // Tentar manter os métodos o mais simples possível
  public function publish(): void
  {
    $this->visible = true;
  }

  public function isPublic(): bool
  {
    return $this->visible;
  } 

  public function getAgeLimit(): int
  {
    return $this->ageLimit;
  }

  public function setAgeLimit(int $ageLimit): void
  {
    $this->ageLimit = $ageLimit;
  }
}
