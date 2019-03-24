<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/03/2019
 * Time: 10:27
 */

$companies = [];
while (true) {
    $input = readline();
    if ($input == "End")
        break;
    $token = explode(" -> ", $input);
    list($company, $id) = $token;

    if (!key_exists($company, $companies))
        $companies[$company] = [];
    if (!in_array($id, $companies[$company])) {
        $companies[$company][] = $id;
    }
}
uksort($companies,function ($keyOne, $keyTwo){
    return $keyOne <=> $keyTwo;
});
foreach ($companies as $company=> $id){
    echo $company.PHP_EOL;
    echo "-- ".implode("\n-- ",$id).PHP_EOL;
}