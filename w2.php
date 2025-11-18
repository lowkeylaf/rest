<?php
class Student {
    private $name;
    private $grades;

    public function __construct($name) {
        $this->name = $name;
        $this->grades = [];
    }

    public function addGrade($grade) {
        if (is_numeric($grade)) {
            $this->grades[] = (float)$grade;
        }
    }

    public function getAverage() {
        if (count($this->grades) == 0) {
            return 0;
        }
        $sum = array_sum($this->grades);
        $count = count($this->grades);
        $average = $sum / $count;
        return round($average, 2);
    }

    public function getInfo() {
        $average = $this->getAverage();
        $gradesList = implode(", ", $this->grades);
        return "Студент: {$this->name}\nОценки: {$gradesList}\nСредний балл: {$average}";
    }
}

$student = new Student("Мария");
$student->addGrade(5);
$student->addGrade(4);
$student->addGrade(5);

echo $student->getAverage();
?>