<?php

declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Student
{
    private float $grade;
    private string $name;
    private string $group;

    public function __construct(float $grade, string $name, string $group)
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

class Classroom
{
    public array $list;

    public function __construct(array $list)
    {
        $this->list = $list;
    }
}

$student1 = new Student(6, "Bilbo", "group1");
$student2 = new Student(3, "Gandalf", "group1");
$student3 = new Student(8, "Thorin", "group1");
$student4 = new Student(5, "Kili" , "group1");
$student5 = new Student(9, "Fili", "group1");
$student6 = new Student(4, "Balin", "group1");
$student7 = new Student(1, "Dwalin", "group1");
$student8 = new Student(7, "Dori", "group1");
$student9 = new Student(10, "Nori", "group1");
$student10 = new Student(12, "Ori", "group1");
$student11 = new Student(16, "Oin", "group2");
$student12 = new Student(11, "Bifur", "group2");
$student13 = new Student(13, "Tauriel", "group2");
$student14 = new Student(14, "Legolas", "group2");
$student15 = new Student(15, "Frodo", "group2");
$student16 = new Student(17, "Azog", "group2");
$student17 = new Student(18, "Gollem", "group2");
$student18 = new Student(19, "Thranduil", "group2");
$student19 = new Student(20, "Bombur", "group2");
$student20 = new Student(2, "Radagast", "group2");

$listOfStudents = new classroom([
    $student1,
    $student2,
    $student3,
    $student4,
    $student5,
    $student6,
    $student7,
    $student8,
    $student9,
    $student10,
    $student11,
    $student12,
    $student13,
    $student14,
    $student15,
    $student16,
    $student17,
    $student18,
    $student19,
    $student20,
]);

$score1 = 0;
$score2 = 0;
$count1 = 0;
$count2 = 0;

//for($i = 0 ; $i < sizeof($students) ; $i++)
//{
//    if($students[$i]->getGroup() == "group1")
//    {
//        $score1 += $students[$i]->getScore();
//        $count1++;
//    }
//    elseif($students[$i]->getGroup() == "group2")
//    {
//        $score2 += $students[$i]->getScore();
//        $count2++;
//    }
//}

print_r($score1 / $count1);
echo "<br>";
print_r($score2 / $count2);

?>
