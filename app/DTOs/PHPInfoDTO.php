<?php

namespace App\DTOs;

class PHPInfoDTO
{
public $php_version;
public $php_info;

public function __construct($php_version, $php_info)
{
$this->php_version = $php_version;
$this->php_info = $php_info;
}
}