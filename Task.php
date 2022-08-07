<?php

require_once 'User.php';

class Task {
    private User $user;
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private int $priotity;
    private bool $isDone;
    private array $comments = [];
    
    function __construct($user)
    {
       $this->user = $user;
       $this->setDateCreated();
    }

    public function markAsDone()
    {
        $this->setIsDone(true);
        $this->setDateUpdated();
        $this->setDateDone();
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        $this->setDateUpdated();
        return $this;
    }

    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    public function setDateCreated()
    {
        $this->dateCreated = new DateTime();
        return $this;
    }

    public function getDateDone()
    {
        return $this->dateDone;
    }

    public function setDateDone()
    {
        $this->dateDone = new DateTime();
        return $this;
    }

    public function getPriotity()
    {
        return $this->priotity;
    }

    public function setPriotity($priotity)
    {
        $this->priotity = $priotity;
        return $this;
    }

    public function getIsDone()
    {
        return $this->isDone;
    }

    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;
        return $this;
    }

    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }

    public function setDateUpdated()
    {
        $this->dateUpdated = new dateTime();
        return $this;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function addComments($comments)
    {
        $this->comments[] = $comments;

        return $this;
    }


};