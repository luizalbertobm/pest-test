<?php

namespace App\model;

use DateTime;

class User
{
    public string $name;
    public DateTime $birthDate;

    public function __construct(string $name, DateTime $birthDate)
    {
        $this->name = $name;
        $this->birthDate = $birthDate;
    }

    public function getAge(): int
    {
        $now = new DateTime();
        $interval = $this->birthDate->diff($now);
        return $interval->y;
    }
}