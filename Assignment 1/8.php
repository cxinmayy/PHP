<?php
class Resort {
    private $RNo;      
    private $Name;     
    private $Charges;  
    private $Days;     

   
    public function Getinfo($RNo, $Name, $Charges, $Days) {
        $this->RNo = $RNo;
        $this->Name = $Name;
        $this->Charges = $Charges;
        $this->Days = $Days;
    }

    
    public function Compute() {
        $Amount = $this->Days * $this->Charges;
        if ($Amount > 11000) {
            $Amount *= 1.02; 
        }
        return $Amount;
    }

   
    public function DispInfo() {
        echo "Room Number: $this->RNo" . PHP_EOL;
        echo "<br>";
        echo "Customer Name: $this->Name" . PHP_EOL;
        echo "<br>";
        echo "Per Day Charges: $this->Charges" . PHP_EOL;
        echo "<br>";
        echo "Number of Days: $this->Days" . PHP_EOL;
        echo "<br>";
        echo "Total Amount: " . $this->Compute() . PHP_EOL;
    }
}


$resort1 = new Resort();
$resort1->Getinfo(101, "John Doe", 2500, 5); // Room No, Name, Charges, Days
$resort1->DispInfo();

$resort2 = new Resort();
$resort2->Getinfo(102, "Alice Smith", 4000, 3);
$resort2->DispInfo();
?>