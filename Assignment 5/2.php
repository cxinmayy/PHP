<?php
class Fruit {
    private $name;
    private $shape;
    private $colour;
    private $price;
    
    public function __construct($name, $shape, $colour, $price) {
        $this->name = $name;
        $this->shape = $shape;
        $this->colour = $colour;
        $this->price = $price;
    }
    
    public function __destruct() {
        echo "Fruit: $this->name, Shape: $this->shape, Colour: $this->colour, Price: $this->price\n";
    }
}

$fruits = [];
$fruitData = [
    ['Apple', 'Round', 'Red', 150],
    ['Banana', 'Elongated', 'Yellow', 50],
    ['Grapes', 'Small', 'Green', 100],
    ['Mango', 'Oval', 'Orange', 200],
    ['Pineapple', 'Spiky', 'Brown', 250],
    ['Watermelon', 'Large Round', 'Green', 300],
    ['Strawberry', 'Heart', 'Red', 180]
];

for ($i = 0; $i < 7; $i++) {
    $fruits[] = new Fruit($fruitData[$i][0], $fruitData[$i][1], $fruitData[$i][2], $fruitData[$i][3]);
}
?>