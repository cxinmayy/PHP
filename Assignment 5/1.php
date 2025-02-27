<?php
class House
{
    public $room;
    public $fan;
    public $window;
    public $washroom;

    public function setValues($room, $fan, $window, $washroom)
    {
        $this->room = $room;
        $this->fan = $fan;
        $this->window = $window;
        $this->washroom = $washroom;
    }

    private function displayPrivate()
    {
        echo "This is a private function.";
    }

    public function displayValues()
    {
        echo "Rooms: $this->room, Fans: $this->fan, Windows: $this->window, Washrooms: $this->washroom\n";
    }
}

$house1 = new House();
$house1->setValues(3, 2, 4, 1);
$house1->displayValues();

$house2 = new House();
$house2->setValues(5, 3, 6, 2);
$house2->displayValues();
?>
