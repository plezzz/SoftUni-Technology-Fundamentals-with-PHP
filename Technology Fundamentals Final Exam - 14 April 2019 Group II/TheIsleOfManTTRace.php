<?php

$pattern = '/([#$%*&])(?<name>[a-zA-Z]+)(\1)[=]{1}(?<length>[\d]+)!!(?<geocode>.+)/m';

while (true) {
    $input = readline();

    if (preg_match($pattern, $input)) {
        preg_match_all($pattern, $input, $matches, PREG_SET_ORDER, 0);
        $name = $matches[0]["name"];
        $length = $matches[0]["length"];
        $geocode = $matches[0]["geocode"];

        $charGeo = str_split($geocode);
        foreach ($charGeo as $key => $char) {
            $charGeo[$key] = chr(ord($char) + $length);
        }
        $geo = implode("", $charGeo);

        if (strlen($geo) == $length) {
            echo "Coordinates found! $name -> $geo\n";
            break;
        } else
            echo "Nothing found!\n";
    } else {
        echo "Nothing found!\n";
    }
}