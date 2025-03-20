<?php
class BankAccount {
    private $accountNumber;
    private $accountHolder;
    private $balance;

    
    public function __construct($accountNumber, $accountHolder, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->accountHolder = $accountHolder;
        $this->balance = $balance;
    }

    
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Deposited: $amount. New Balance: $this->balance" . PHP_EOL;
        } else {
            echo "Invalid deposit amount!" . PHP_EOL;
        }
    }

    
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Withdrawn: $amount. Remaining Balance: $this->balance" . PHP_EOL;
        } elseif ($amount > $this->balance) {
            echo "Insufficient balance! Available balance: $this->balance" . PHP_EOL;
        } else {
            echo "Invalid withdrawal amount!" . PHP_EOL;
        }
    }

    
    public function displayAccountInfo() {
        echo "Account Number: $this->accountNumber" . PHP_EOL;
        echo "Account Holder: $this->accountHolder" . PHP_EOL;
        echo "Balance: $this->balance" . PHP_EOL;
    }
}


$account1 = new BankAccount("123456789", "John Doe", 1000);
$account1->displayAccountInfo();
$account1->deposit(500);
$account1->withdraw(300);
$account1->withdraw(1500); 
?>