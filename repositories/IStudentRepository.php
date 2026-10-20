<?php

interface IStudentRepository {
    
  public static function all();

  public static function find(string $id);

  public static function save(array $student);

  public static function update(array $student, string $id);

  public static function delete(string $id);

}