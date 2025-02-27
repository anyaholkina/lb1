<?php

namespace App\DTOs;

class DatabaseInfoDTO
{
public $database_connection;
public $database_name;

public function __construct($database_connection, $database_name)
{
$this->database_connection = $database_connection;
$this->database_name = $database_name;
}
}