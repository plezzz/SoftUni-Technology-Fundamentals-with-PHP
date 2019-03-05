<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 11:58
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
    $student = new Student($firstName, $lastName, $age, $city);
    array_push($students, $student);
}


$city = readline();
foreach ($students as $value) {
    if ($value->getCity() == $city) {
        echo "{$value->getFirstName()} {$value->getLastName()} is {$value->getAge()} years old." . PHP_EOL;
    }
}