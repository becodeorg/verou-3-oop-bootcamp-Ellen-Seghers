<?php

class Student
{
    private $grade;
    private $name;
    private $group;

    public function __constructor($grade, $name, $group)
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

$group1 = [];

for($i = 0 ; $i < 10 ;$i++)
{
    $group1[$i] = new Student(0, "A", "group1");
}

$group2 = [];

for($i = 0; $i < 10; $i++)
{
    $group2[$i] = new Student(0, "A", "Group2");
}

?>
