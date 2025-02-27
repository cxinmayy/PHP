<?php
class BCA {
    private $name;
    private $rollno;
    protected $age;
    public $gender;
    
    public function __construct($name, $rollno, $age, $gender) {
        $this->name = $name;
        $this->rollno = $rollno;
        $this->age = $age;
        $this->gender = $gender;
    }
    
    public function setDetails($rollno, $age, $gender) {
        $this->rollno = $rollno;
        $this->age = $age;
        $this->gender = $gender;
    }
    
    public function getName() {
        return $this->name;
    }
    
    public function displayBCA() {
        echo "BCA Student: $this->name, Roll No: $this->rollno, Age: $this->age, Gender: $this->gender\n";
    }
}

class MCA extends BCA {
    private $mcaroll;
    private $mobile;
    
    public function __construct($name, $rollno, $age, $gender, $mcaroll, $mobile) {
        parent::__construct($name, $rollno, $age, $gender);
        $this->mcaroll = $mcaroll;
        $this->mobile = $mobile;
    }
    
    public function setMCA($mcaroll, $mobile) {
        $this->mcaroll = $mcaroll;
        $this->mobile = $mobile;
    }
    
    public function displayMCA() {
        echo "MCA Student: " . $this->getName() . ", MCA Roll No: $this->mcaroll, Mobile: $this->mobile\n";
    }
}

$mcaStudent = new MCA("John Doe", 101, 22, "Male", 5001, "9876543210");
$mcaStudent->displayMCA();
?>
