<?php

namespace App\Models;

class Student extends Person
{
    public $group;
    public $university;
    public $projectTopic;   

    public function __construct($name, $surname, $patronimic, $group, $university, $projectTopic)
    {   
        Person::__construct($name, $surname, $patronimic);
        $this->group = $group;
        $this->university = $university;
        $this->projectTopic = $projectTopic;
    }
}
