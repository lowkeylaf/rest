<?php
class BankAccount {
    private $owner;
    private $balance;
    public function __construct($owner, $initialBalance = 0){
        $this->owner = $owner;
        $this->balance = $initialBalance;
    }
    public function deposit($amount){
        if($amount>0){
            $this->balance+=$amount;
        }
    }
    public function withdraw($amount){
        if($amount<=0){
            return false;
        }
        if ($this->balance>=$amount){
            $this->balance>=$amount;
            return true;
        }else{
            echo"Ошибка: Недостаточно средств на сечте.\n";
            return false;
        }
    }
    public function getBalance(){
        return $this->balance;
    }
}
$account = new Bankaccount("Иван", 1000);
$account->deposit(500);
$account->withdraw(200);
echo $account->getBalance();
?>