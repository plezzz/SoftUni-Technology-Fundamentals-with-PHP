<?php

$pattern = '/^[d-z{}|#]+$/';
$message=readline();
list($needle, $replace)=explode(" ",readline());

if (preg_match($pattern,$message)){
for($i=0; $i<strlen($message); $i++){
$message[$i]=chr(ord($message[$i])-3);
}
$message=str_replace($needle,$replace,$message);
echo $message;
}else
    echo "This is not the book you are looking for.";