<?php
class Line {
    private $length;
    
    public function __construct($length) {
        $this->length = $length;
    }
    
    public function __destruct() {
        echo str_repeat('-', $this->length) . "\n";
    }
}

$line1 = new Line(20);
$line2 = new Line(30);

?>