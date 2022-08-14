<?php


class Task {
    private string $description;
    private DateTime $dateCreated;
    private DateTime $dateUpdated;
    private DateTime $dateDone;
    private bool $isDone;
    
    function __construct($description)
    {
       $this->description = $description;
       $this->isDone = false;
       $this->setDateCreated();
    }

    public function markAsDone()
    {
        $this->isDone = true;
        $this->setDateUpdated();
        $this->setDateDone();
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

    public function getIsDone()
    {
        return $this->isDone;
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
};