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
  private string $firstName;
  private string $lastName;
  public string $street;
  public string $number;
  public string $province;
  public string $city;
  public string $state;
  public string $country;

  public function __construct(
    Email $email,
    DateTimeInterface $birthDate,
    string $firstName,
    string $lastName,
    string $street,
    string $number,
    string $province,
    string $city,
    string $state,
    string $country
  )
  {
    $this->whatchedVideos = new WhatchedVideos();
    $this->$email;
    $this->birthDate = $birthDate;
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->street = $street;
    $this->number = $number;
    $this->province = $province;
    $this->city = $city;
    $this->state = $state;
    $this->country = $country;
  }

  public function fullName(): string
  {
    return "{$this->firstName} {$this->lastName}";
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