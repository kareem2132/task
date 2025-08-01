<?php
class BankAccount {
    private $balance = 0;
    public function getBalance() {
        return $this->balance;
    }
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }
    public function withdraw($amount) {
        if ($amount > 0 && $this->balance >= $amount) {
            $this->balance -= $amount;
        }
    }
}
$account = new BankAccount();
$account->deposit(1000);
$account->withdraw(500);
echo $account->getBalance();
?>