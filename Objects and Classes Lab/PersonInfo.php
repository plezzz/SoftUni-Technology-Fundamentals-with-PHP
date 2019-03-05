<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 11:17
 */

class Person
{
    private $firstName;
    private $lastName;
    private $age;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }
}

$person = new Person ();
$person->setFirstName(readline());
$person->setLastName(readline());
$person->setAge(readline());

echo "firstName: {$person->getFirstName()}" . PHP_EOL;
echo "lastName: {$person->getLastName()}" . PHP_EOL;
echo "age: {$person->getAge()}" . PHP_EOL;