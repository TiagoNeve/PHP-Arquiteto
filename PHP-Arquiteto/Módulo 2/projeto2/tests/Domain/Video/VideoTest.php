<?php

namespace Calisthenics\Tests\Unit\Domain\Video;

use Calisthenics\Domain\Video\Video;
use PHPUnit\Framework\TestCase;

class VideoTest extends TestCase
{
  public function testMackingAVideoPublicMustWork()
  {
    $video = new Video();
    $video->checkIfVisibilityIsValidAndUpdateIt(Video::PUBLIC);

    self::assertSame(Video::PUBLIC, $video->getVisibility());
  }
}