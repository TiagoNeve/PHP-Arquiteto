<?php

namespace Calisthenics\Domain\Student;

use Calisthenics\Domain\Video\Video;
use DateTimeInterface;
use Calisthenics\Domain\Email\Email;

class Student
{
  private Email $email;
  private DateTimeInterface $birthDate;
  private WhatchedVideos $whatchedVideos;
  public FullName $fullName;
  public Address $address;

  public function __construct(
    Email $email,
    DateTimeInterface $birthDate,
    Fullname $fullName,
    Address $address
  )
  {
    $this->whatchedVideos = new WhatchedVideos();
    $this->$email;
    $this->birthDate = $birthDate;
    $this->fullName = $fullName;
    $this->address = $address;
  }

  public function fullName(): string
  {
    return (string) $this->fullName;
  }

  public function email(): string
  {
    return $this->email;
  }  

  public function birthDate(): DateTimeInterface
  {
    return $this->birthDate;
  }

  public function watch(Video $video, DateTimeInterface $date)
  {
    $this->whatchedVideos->add($video, $date);
  }

  public function hasAccess(): bool
  {
    if ($this->whatchedVideos->count() === 0) {
      return true;
    }

    $firstDate = $this->whatchedVideos->dateOfFirstVideo();
    $today = new \DateTimeImmutable();

    return $firstDate->diff($today)->days < 90;
  }

  public function age(): int
  {
    $today = new \DateTimeImmutable();
    $dateInterval = $this->birthDate->diff($today);

    return $dateInterval->y;
  }
}