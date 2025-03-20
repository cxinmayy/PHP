<?php
class Rectangle {
    private $length;
    private $breadth;

    
    public function __construct($length, $breadth) {
        $this->length = $length;
        $this->breadth = $breadth;
    }

    
    public function Area() {
        return $this->length * $this->breadth;
    }

    
    public function display() {
        echo "Rectangle with Length = $this->length and Breadth = $this->breadth has Area = " . $this->Area() . PHP_EOL;
    }
}


$rect1 = new Rectangle(4, 5);
$rect2 = new Rectangle(5, 8);

// Displaying area
$rect1->display();
$rect2->display();
?>