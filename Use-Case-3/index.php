<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Student
{
    private $grade;
    private $name;
    private $group;

    public function __construct($grade, $name, $group)
    {
        $this->grade = $grade;
        $this->name = $name;
        $this->group = $group;
    }

    public function getScore()
    {
        return $this->grade;
    }

    public function getGroup()
    {
        return $this->group;
    }
}

$students = [];

for($i = 0 ; $i < 10 ; $i++)
{
    $students[$i] = new Student($i, "A", "group1");
}

for($i = 10 ; $i < 20 ; $i++)
{
    $students[$i] = new Student($i -1, "A", "group2");
}

$score1 = 0;
$score2 = 0;
$count1 = 0;
$count2 = 0;

for($i = 0 ; $i < sizeof($students) ; $i++)
{
    if($students[$i]->getGroup() == "group1")
    {
        $score1 += $students[$i]->getScore();
        $count1++;
    }
    elseif($students[$i]->getGroup() == "group2")
    {
        $score2 += $students[$i]->getScore();
        $count2++;
    }
}
print_r($score1 / $count1);
echo "<br>";
print_r($score2 / $count2);

?>
