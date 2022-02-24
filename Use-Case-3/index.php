<?php

class Student
{
    private $grade;
    private $name;
    private $group;

    public function __constructor ($grade, $name, $group)
    {
        $this->grade = $grade;
        $this->name = $name;
        $this->group = $group;
    }

    public function getScore ()
    {
        return $this->grade;
    }
}

for($i = 0 ; $i < 10 ;$i++)
{

}


?>
