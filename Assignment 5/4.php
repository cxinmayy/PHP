<?php
// Base class
class BCA {
    // Data members (at least one private, one protected)
    private $name;
    protected $rollno;
    protected $age;
    protected $gender;

    // Public function to set BCA student details
    public function setBCAData($name, $rollno, $age, $gender) {
        $this->name = $name;
        $this->rollno = $rollno;
        $this->age = $age;
        $this->gender = $gender;
    }

    // Public function to get student name (used in derived class)
    public function getName() {
        return $this->name;
    }

    // Public function to display BCA student data
    public function displayBCAData() {
        echo "<h3>BCA Student Details:</h3>";
        echo "Name: " . $this->name . "<br>";
        echo "Roll No: " . $this->rollno . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Gender: " . $this->gender . "<br>";
    }
}

// Derived class
class MCA extends BCA {
    // Private data members
    private $mcaroll;
    private $mobile;

    // Public function to set MCA data
    public function setMCAData($mcaroll, $mobile) {
        $this->mcaroll = $mcaroll;
        $this->mobile = $mobile;
    }

    // Public function to display MCA data (using inherited name)
    public function displayMCAData() {
        echo "<h3>MCA Student Details:</h3>";
        echo "Name (Inherited): " . $this->getName() . "<br>";
        echo "MCA Roll No: " . $this->mcaroll . "<br>";
        echo "Mobile: " . $this->mobile . "<br>";
    }
}

// ---------- MAIN PROGRAM ----------

// Create object of derived class only
$student = new MCA();

// Set data using derived class functions
$student->setBCAData("Aarav", "BCA101", 20, "Male");
$student->setMCAData("MCA202", "9876543210");

// Display all data
$student->displayBCAData();
$student->displayMCAData();
?>
