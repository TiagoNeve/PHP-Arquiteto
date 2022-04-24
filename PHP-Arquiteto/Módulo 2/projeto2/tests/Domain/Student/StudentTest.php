<?php

namespace Calisthenics\Tests\Unit\Domain\Student;

use Calisthenics\Domain\Email\Email;
use Calisthenics\Domain\Student\Address;
use Calisthenics\Domain\Student\FullName;
use Calisthenics\Domain\Student\Student;
use Calisthenics\Domain\Video\Video;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
  private Student $student;

  protected function setUp(): void
  {
    $this->student = new Student(
      new Email('email@email.com'),
      new \DateTimeImmutable('19:20'),
      new FullName('Primeiro', 'Segundo'),
      new Address('rua', '100', 'bairro', 'cidade', 'estado', 'pais');
    );
  }

  public function testFullNameMustBeRepresentedAsString()
  {
    self::assertEquals('Primeiro Segundo', $this->student->fullName());
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