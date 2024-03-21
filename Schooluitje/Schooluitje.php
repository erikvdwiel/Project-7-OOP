<?php
// van der Wiel
require ('Persoon.php');
require ('Student.php');
require ('SchooltripList.php');
require ('Teacher.php');
class Schooltrip {
    private $name;
    private $schooltripLists = [];
    private $countStudent = 0;
    private $countList = 0;
    private $amount = 0;

    public function __construct($name) {
        $this->name = $name;
    }

    public function addSchooltripList() {
        $this->schooltripLists[] = new SchooltripList();
        $this->countList++;
    }
    public function getName() {
        return $this->name;
    }

    public function addStudent(Student $student) {
        if ($this->countStudent % 5 == 0) {
            $this->addSchooltripList();
        }

        $this->schooltripLists[$this->countList - 1]->addStudentToList($student);
        $this->countStudent++;
    }

    public function getSchooltripLists() {
        return $this->schooltripLists;
    }

    public function getTotalAmount() {
        return $this->amount;
    }

    public function collectPayment(Student $student, $amount) {
        $student->pay($amount);
        $this->amount += $amount;
    }
}

$schoolTrip = new Schooltrip("Fun Trip");


$student1 = new Student("Alice", false);
$student2 = new Student("Bob", false);
$student3 = new Student("Charlie", false);
$student4 = new Student("David", false);
$student5 = new Student("Eve", false);
$student6 = new Student("Frank", false);


$schoolTrip->addStudent($student1);
$schoolTrip->addStudent($student2);
$schoolTrip->addStudent($student3);
$schoolTrip->addStudent($student4);
$schoolTrip->addStudent($student5);
$schoolTrip->addStudent($student6);


$teacher = new Teacher("Mr. Smith", 0);

// maak de trip
$schoolTripList = $schoolTrip->getSchooltripLists()[0];
$schoolTripList->setTeacher($teacher);

echo "School Trip: " . $schoolTrip->getName() ."<br>". PHP_EOL;
foreach ($schoolTrip->getSchooltripLists() as $index => $list) {
    $teacher = $list->getTeacher();

    if ($teacher !== null) {
        echo "Group " . ($index + 1) . " - Teacher: " . $teacher->getTeacherName() . PHP_EOL;
        echo '<br>';
    }

    foreach ($list->getStudentLists() as $student) {
        echo "   Student: " . $student->getName() . PHP_EOL;
    }
}


echo '<br>';
echo '<br>';
// krijg de betalingen
$amountToCollect = 1000;
$paid_stud1 = 105;
$paid_stud2 = 125;
$paid_stud3 = 245;
$paid_stud4 = 340;
$schoolTrip->collectPayment($student1, $paid_stud1);
$schoolTrip->collectPayment($student2, $paid_stud2);
$schoolTrip->collectPayment($student3, $paid_stud3);
$schoolTrip->collectPayment($student4, $paid_stud4);
echo "Amount collected from " . $student1->getName() . ": $" . $paid_stud1 . PHP_EOL;
echo '<br>';
echo "Amount collected from " . $student2->getName() . ": $" . $paid_stud2 . PHP_EOL;
echo '<br>';
echo "Amount collected from " . $student3->getName() . ": $" . $paid_stud3 . PHP_EOL;
echo '<br>';
echo "Amount collected from " . $student4->getName() . ": $" . $paid_stud4 . PHP_EOL;
echo '<br>';
echo '<br>';

// EZ wigmans

echo "Total Amount Collected: $" . $schoolTrip->getTotalAmount() . PHP_EOL;
