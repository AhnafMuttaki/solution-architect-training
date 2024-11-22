<?php
abstract class BaseEntity {
    protected string $id;
    protected DateTime $createdDate;

    public function __construct() {
        $this->id = uniqid();
        $this->createdDate = new DateTime();
    }

    public function getId(): string {
        return $this->id;
    }

    public function getCreatedDate(): DateTime {
        return $this->createdDate;
    }
}

