<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/03/2019
 * Time: 06:35
 */

$types=[];
while (true){
        $input=readline();
        if ($input == "stop")
            break;
        $secInput=readline();
        if (key_exists($input,$types))
            $types[$input] += $secInput;
        else
            $types[$input] = $secInput;
}

foreach ($types as $type=>$value){
    echo $type." -> ".$value."K\n";
}