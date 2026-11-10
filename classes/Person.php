<?php
class Person
{
    protected int $id;
    protected string $firstname;
    protected string $lastname;

    public function __construct(string $firstname, string $lastname, int $id)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getId(): int {
        return $this->id;
    }
}
