<?php 

namespace Calisthenics\Domain\Video;

use Calisthenics\Domain\Student\Student;

class InMemoryVideoRepository implements IVideoRepository
{
  private array $videos;

  public function add(Video $video): void
  {
    $this->videos[] = $video;
  }

  public function videosFor(Student $student): array
  {
    
    return array_filter($this->videos, fn (Video $video) => $video->getAgeLimit() <= $student->age());
  }
}