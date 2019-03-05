<?php

/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 12:21
 */
class Student
{
    private $firstName;
    private $lastName;
    private $age;
    private $city;

    public function __construct(string $firstName, string $lastName, int $age, string $city)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }
}

$students = [];
while (true) {
    $input = readline();
    if ($input == "end")
        break;
    $student = explode(" ", $input);
    $firstName = $student[0];
    $lastName = $student[1];
    $age = $student[2];
    $city = $student[3];
    if (isStudentExisting($students, $firstName, $lastName)) {
        foreach ($students as $student) {
            if ($student->getFirstName() == $firstName and $student->getLastName() == $lastName) {
                $student->setAge($age);
                $student->setCity($city);
                break;
            }
        }

    } else {
        $student = new Student($firstName, $lastName, $age, $city);
        array_push($students, $student);
    }
}


$city = readline();
foreach ($students as $value) {
    if ($value->getCity() == $city) {
        echo "{$value->getFirstName()} {$value->getLastName()} is {$value->getAge()} years old." . PHP_EOL;
    }
}


function isStudentExisting($studentData, $name, $lastName)
{
    foreach ($studentData as $student) {
        if ($student->getFirstName() == $name and $student->getLastName() == $lastName) {
            return true;
        }
    }
    return false;
}

