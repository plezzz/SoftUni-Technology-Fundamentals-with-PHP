<?php

/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 11:41
 */
class Song
{
    private $typeList;
    private $name;
    private $time;

    public function __construct(string $typeList, string $name, $time)
    {
        $this->typeList = $typeList;
        $this->name = $name;
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getTypeList(): string
    {
        return $this->typeList;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTime(): string
    {
        return $this->time;
    }
}

$songs = readline();
$arraySongs = [];
for ($i = 0; $i < $songs; $i++) {
    $current = explode("_", readline());
    $type = $current[0];
    $name = $current[1];
    $time = $current[2];
    $song = new Song($type, $name, $time);
    array_push($arraySongs, $song);
}

$typeList = readline();
if ($typeList == "all") {
    foreach ($arraySongs as $value) {
        echo $value->getName() . PHP_EOL;
    }
} else {
    foreach ($arraySongs as $value) {
        if ($value->getTypeList() === $typeList) {
            echo $value->getName() . PHP_EOL;
        }
    }
}