<?php

class StudentRepository extends DBRepository implements IStudentRepository {

public static function all() {
    $students = [
  [
    'id' => 1,
    'student_number' => '12-123',
    'firstname' => 'Juan',
    'lastname' => 'Dela Cruz',
    'date_of_birth' => 'Sep. 2, 2023'
  ],
  [
    'id' => 2,
    'student_number' => '12-234',
    'firstname' => 'Mike',
    'lastname' => 'Cruz',
    'date_of_birth' => 'Sep. 2, 2023'
  ]
];

    return $students;
  }

  public static function find(string $id) {
    return [];
  }

  public static function save(array $student) {
    return [];
  }

  public static function update(array $student, string $id) {
    return [];
  }

  public static function delete(string $id) {
    return [];
  }

  public function getAll() : array {
    return [];
  }

}