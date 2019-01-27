<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 26/01/2019
 * Time: 15:36
 */

$country = strval(readline());

switch (true) {
    case ("England"==$country || "USA"==$country):

        {
            echo "English";
            break;
        }
    case ("Spain"==$country || "Argentina"==$country||  "Mexico"==$country):
        {
            echo "Spanish";
            break;
        }
    default:
        {
            echo "unknown";
            break;
        }
}