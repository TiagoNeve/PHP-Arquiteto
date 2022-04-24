<?php

namespace Calisthenics\Domain\Video;

class Video
{
  public const PUBLIC = 1;
  public const PRIVATE = 2;

  private int $visibility = self::PRIVATE;
  private int $ageLimit;

  // Tentar manter os métodos o mais simples possível
  public function publish(): void
  {
    $this->visibility = self::PUBLIC;
  }

  public function getVisibility(): int
  {
    return $this->visibility;
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
