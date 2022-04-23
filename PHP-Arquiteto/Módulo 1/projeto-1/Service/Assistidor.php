<?php

use AluraMais;
use Curso;

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