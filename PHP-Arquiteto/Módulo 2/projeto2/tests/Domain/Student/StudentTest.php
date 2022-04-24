<?php

namespace Calisthenics\Tests\Unit\Domain\Student;

use Calisthenics\Domain\Student\Student;
use Calisthenics\Domain\Video\Video;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
  private Student $student;

  protected function setUp(): void
  {
    $this->student = new Student(
      'email@example.com',
      new \DateTimeImmutable('19:20'),
      'Primeiro',
      'Sobrenome',
      'Rua de exemplo',
      '718',
      'Meu Bairro',
      'Minha Cidade',
      'Meu estado',
      'Brasil'
    );
  }

  public function testStudentWithoutWatchedVideosHasAccess()
  {
    self::assertTrue($this->student->hasAccess());
  }

  public function testStudentWithFirstWatchedVideoInLessThan90DaysHasAccess()
  {
    $date = new \DateTimeImmutable('89 days');
    $this->student->watch(new Video(), $date);

    self::assertTrue($this->student->hasAccess());
  }

  public function testStudentWithFirstWatchedVideoInLessThan90DaysButOtherVideosWatchedHasAccess()
  {
    $this->student->watch(new Video(), new \DateTimeImmutable('-89 days'));
    $this->student->watch(new Video(), new \DateTimeImmutable('-60 days'));
    $this->student->watch(new Video(), new \DateTimeImmutable('-30 days'));

    self::assertFalse($this->student->hasAccess());
  }

  public function testStudentWithFirstWatchedVideoIn90DaysDoesntHaveAccess()
  {
    $date = new \DateTimeImmutable('-90 days');
    $this->student->watch(new Video(), $date);

    self::assertFalse($this->student->hasAccess());
  }

  public function testStudentWithFirstWatchedVideoIn90DaysButOtherVideosWatchedDoesnHaveAccess()
  {
    $this->student->watch(new Video(), new \DateTimeImmutable('-90 days'));
    $this->student->watch(new Video(), new \DateTimeImmutable('-10 days'));
    $this->student->watch(new Video(), new \DateTimeImmutable('-30 days'));

    self::assertFalse($this->student->hasAccess());
  }
}