<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 12:55
 */

class Box
{
    private $name;
    private $price;
    private $serialNumber;
    private $item;
    private $itemQuantity;
    private $priceForBox;

    public function __construct(string $name, float $price, int $serialNumber, string $item, int $itemQuantity, float $priceForBox)
    {
        $this->name = $name;
        $this->price = $price;
        $this->serialNumber = $serialNumber;
        $this->item = $item;
        $this->itemQuantity = $itemQuantity;
        $this->priceForBox = $priceForBox;
    }

    /**
     * @return int
     */
    public function getSerialNumber(): int
    {
        return $this->serialNumber;
    }

    /**
     * @return string
     */
    public function getItem(): string
    {
        return $this->item;
    }

    /**
     * @return int
     */
    public function getItemQuantity(): int
    {
        return $this->itemQuantity;
    }

    /**
     * @return float
     */
    public function getPriceForBox(): float
    {
        return $this->priceForBox;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

}

$products = [];
while (true) {
    $input = readline();
    if ($input == "end")
        break;
    $args = explode(" ", $input);
    $serialNumber = $args[0];
    $name = $args[1];
    $quantity = $args[2];
    $price = $args[3];
    $item = $name;
    $priceForBox = $price * $quantity;
    $product = new Box($name, $price, $serialNumber, $item, $quantity, $priceForBox);
    array_push($products, $product);
}
usort($products, function ($a, $b) {
    return ($b->getPriceForBox() - $a->getPriceForBox());
});
foreach ($products as $product) {
    echo "{$product->getSerialNumber()}" . PHP_EOL;
    printf("-- {$product->getItem()} - $%.2f: {$product->getItemQuantity()}". PHP_EOL,$product->getPrice());
    printf("-- $%.2f". PHP_EOL,$product->getPriceForBox() );
}
