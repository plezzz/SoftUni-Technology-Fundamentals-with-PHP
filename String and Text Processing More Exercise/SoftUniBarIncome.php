<?php


$re = '/%(?<customer>[\A-Z]{1}[a-z]+)%{1}.*<{1}(?<product>[\w]+)>{1}.*\|{1}(?<count>[\d]+)\|{1}.*?(?<price>[\d]+[.]?[\d]{1,2})\${1}/m';
$matches=[];
while (true){
    $input=readline();
    if ($input=="end of shift")
        break;
    preg_match_all($re, $input, $matches[], PREG_SET_ORDER, 0);
}
$matches=array_filter($matches);
$total=0;
foreach ($matches as  $match){
    $name=$match[0]['customer'];
    $product=$match[0]['product'];
    $price=$match[0]['count']*$match[0]['price'];
    $total+=$price;
    printf("%s: %s - %.2f\n",$name,$product,$price);
}
printf("Total income: %.2f",$total);