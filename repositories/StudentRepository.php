<?php

class StudentRepository extends DBRepository implements IStudentRepository
{

    public static function all()
    {
        $sql = "SELECT * FROM student";
        $students = self::query($sql);
       
        $result = [];
       
        foreach ($students as $s) {
            $result[] = new Student(
                $s['student_number'],
                $s['firstname'],
                $s['lastname'],
                $s['dob'],
            );
        }

        return $result;
    }

    public static function find(string $id)
    {
        return [];
    }

    public static function save(array $student)
    {
        return [];
    }

    public static function update(array $student, string $id)
    {
        return [];
    }

    public static function delete(string $id)
    {
        return [];
    }

    public function getAll(): array
    {
        return [];
    }
}
