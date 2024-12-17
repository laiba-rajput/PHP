<?php
    class Account{
        private $balance;
        public function getBalance(){
            return $this->balance;
    }
    public function Deposit($amount){
        if($amount > 0){
        $this->balance += $amount;}
        else{
            echo"deposit amount will be greater than zero ";}
        }
        
        public function withdraw($amount){
            if($amount <= $this->balance){
                $this->balance -= $amount;}
            else{
                echo "withdraw amount will be greater than zero";
            }
        }
        }
        echo"wellcom to BHL ATM system <br>";

        $account = new Account();
        $account->Deposit(5000);
        $account->Withdraw(500);
        echo $account->getBalance();

?>