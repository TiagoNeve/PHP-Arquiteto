<?php

namespace Calisthenics\Domain\Video;

use Calisthenics\Domain\Student\Student;

interface IVideoRepository
{
  public function add(Video $video): void;
  public function videosFor(Student $student): array;
}