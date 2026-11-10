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
                $s['id'],
            );
        }

        return $result;
    }

    public static function find(string $id)
    {
        return [];
    }

    public static function create(array $s)
    {
         $sql = "INSERT INTO student (student_number, firstname, lastname, dob )"; 
         $sql .= " VALUES ('".$s['student_number']."', '".$s['firstname']."', ";
         $sql .= " '".$s['lastname']."', '".$s['dob']."')";
        self::connection()->query($sql);
        }

    public static function update(array $student, string $id)
    {
        return [];
    }

    public static function delete(string $id)
    {
        $sql = "DELETE FROM student WHERE id = ".$id;
        self::connection()->query($sql);
    }

    public function getAll(): array
    {
        return [];
    }
}
