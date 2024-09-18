<?php

namespace App\Models;

abstract class Person
{
    public $name;
    public $surname;
    public $patronimic;
    public function __construct($name, $surname, $patronimic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronimic = $patronimic;
    }

    public function __toString()
    {
        return $this->surname . ' ' . $this->name . ' ' . $this->patronimic;
    }
}
