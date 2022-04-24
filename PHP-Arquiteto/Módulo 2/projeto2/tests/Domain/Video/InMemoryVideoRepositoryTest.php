<?php

namespace Calisthenics\Tests\Unit\Domain\InMemoryVideoRepository;

use Calisthenics\Domain\Student\Student;
use Calisthenics\Domain\Video\InMemoryVideoRepository;
use Calisthenics\Domain\Video\Video;
use PHPUnit\Framework\TestCase;

class InMemoryVideoRepository extends TestCase
{
  public function testFindingVideosForAStudentMustFilterAgeLimit()
  {
    $repository = new InMemoryVideoRepository();

    // [21, 20, 19, 18, 17]
    for ($i = 21; $i >= 17; $i--)
    {
      $video = new Video();
      $video->setAgeLimit($i);
      $repository->add($video);
    }

    $tudent = $this->createStub()
  }
}