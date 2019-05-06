<?php

$input = explode("&", readline());
$pattern = '/(^[a-zA-Z0-9]{16}$)|(^[a-z\A-Z\0-9]{25}$)/m';

$keys = [];
for ($i = 0; $i < count($input); $i++) {
    $key = $input[$i];
    if (preg_match($pattern, $key)) {
        $key = strtoupper($key);
        $length = strlen($key);

        for ($j = 0; $j < $length; $j++) {
            if (is_numeric($key[$j]))
                $key[$j] = 9 - $key[$j];
        }

        $split = (25 == $length) ? 5 : 4;
        $arrKey = str_split($key, $split);
        $newKey = implode("-", $arrKey);
        $keys[] = $newKey;
    }
}
echo implode(", ", $keys);