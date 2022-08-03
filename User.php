<?php

class User {
    private string $username;
    private string $email;
    private ?string $sex;
    private ?int $age;
    private bool $isActive = true;
    private DateTime $dateCreated;

    function __construct(string $username, string $email, ?int $age = null)
    {
        $this->username = $username;
        $this->email = $email;
        $this->age = $age;
        $this->dateCreated = new DateTime();
    }

    function getUsername(): string
    {
       return $this->username ?? 'unknown';
    }
    public function setAge(?int $age): void
    {
        $this->age = $this->getValidAge($age);
    }
    public function getAge(): ?int
    {
       return $this->age;
    }
    private function getValidAge(?int $age): ?int
    {
        if ($age > 0 && $age <= 125) {
            return $age;
        }
        return null;
    }
 }