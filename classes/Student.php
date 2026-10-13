<?php

class Student extends Person
{
    public string $student_number;
    protected string $dob;

    public function __construct(string $student_number, string $firstname, string $lastname, string $dob)
    {
        $this->student_number = $student_number;
        $this->dob = $dob;
        parent::__construct($firstname, $lastname);
    }

    public function completeName(): string {
        return  $this->lastname .", ".$this->firstname;
    }

    public function getDOB(): string {
        return $this->dob;
    }
}
