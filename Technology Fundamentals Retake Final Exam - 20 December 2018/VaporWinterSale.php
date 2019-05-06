<?php

$input = explode(', ', readline());
$priceGames = [];
$priceGamesDLC = [];
for ($i = 0; $i < count($input); $i++) {
    $currentGame = $input[$i];
    if (strrpos($currentGame, '-') !== false) {
        list($name,$price)=explode("-",$currentGame);
        if (!key_exists($name, $priceGames)) {
            $priceGames[$name] = $price;
        }
    }
    if (strpos($currentGame, ':') !== false) {
        list($name,$DLC)=explode(":",$currentGame);
        if (key_exists($name, $priceGames)) {
            $newPrice = $priceGames[$name] * 1.2;
            $priceGamesDLC[$name . " - " . $DLC] = $newPrice;
            unset($priceGames[$name]);
        }
    }
}
$loweredPrice = [];
$loweredPriceDLC = [];
foreach ($priceGames as $name => $game) {
    $game -= $game * 0.2;
    $loweredPrice[$name] = number_format($game, 2, '.', '');;
}
foreach ($priceGamesDLC as $name => $gameDLC) {
    $gameDLC -= $gameDLC * 0.5;
    $loweredPriceDLC[$name] = number_format($gameDLC, 2, '.', '');;
}

uksort($loweredPriceDLC, function ($key1, $key2) use ($loweredPriceDLC) {
    return $loweredPriceDLC[$key1] <=> $loweredPriceDLC[$key2];
});
uksort($loweredPrice, function ($key1, $key2) use ($loweredPrice) {
    return $loweredPrice[$key2] <=> $loweredPrice[$key1];
});

foreach ($loweredPriceDLC as $name => $game) {
    echo "$name - $game" . PHP_EOL;
}
foreach ($loweredPrice as $name => $game) {
    echo "$name - $game" . PHP_EOL;
}