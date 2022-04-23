<?php

namespace Solid\Service;

use Solid\Model\AluraMais;
use SOlid\Model\Curso;

class Assistidor
{
  public function assisteCurso(Curso $curso)
  {
    foreach ($curso->recuperarVideos() as $video)
    {
      $video->assistir();
    }
  }

  public function assisteAluraMais(AluraMais $aluraMais)
  {
    $aluraMais->assistir();
  }
}