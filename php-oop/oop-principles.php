<?php

declare(strict_types=1);

// Интерфейс
interface Payable
{
    public function pay(float $amount): void;
}

// Задание 1: Инкапсуляция (геттеры и сеттеры)

class BankAccount implements Payable
{
    private float $balance;
    public function __construct(float $balance)
    {
        if ($balance < 0) {
            throw new Exception("Начальный баланс не может быть отрицательным");
    }
        $this->balance = $balance;
    }
    public function deposit(float $amount): void
    {
        if ($amount <= 0) {
            throw new Exception("Сумма для внесения должна быть больше нуля");
        }
        $this->balance += $amount;
    }

    public function withdraw(float $amount): void
    {
        if ($amount <= 0) {
            throw new Exception("Сумма для снятия должна быть больше нуля");
        }
        if ($this->balance < $amount) {

            throw new Exception("Ошибка: недостаточно средств");
        }
        $this->balance -= $amount;
    }

    public function pay(float $amount): void
    {
        $this->withdraw($amount);
        echo "Баланс уменьшился на {$amount}" . PHP_EOL;
    }

    protected function setBalance(float $balance): void
    {
        $this->balance = $balance;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

// Задание 2: Наследование (расширение класса)

class SavingsAccount extends BankAccount
{
    private float $interestRate;
    public function __construct(float $initialBalance, float $interestRate)
    {
        parent::__construct($initialBalance);
        if ($interestRate < 0) {
            throw new Exception("Процентная ставка не может быть отрицательной");
        }
        $this->interestRate = $interestRate;
    }
    public function applyInterest(): void
    {
        $this->setBalance($this->getBalance() * (1 + $this->interestRate / 100));
    }
}

class CreditAccount extends BankAccount
{
    public function withdraw(float $amount): void
    {
        if ($amount <= 0) {
            throw new Exception("Сумма для снятия должна быть больше нуля");
        }
        $this->setBalance($this->getBalance() - $amount);
    }
    public function pay(float $amount): void
    {
        $this->withdraw($amount);
        $newBalance = $this->getBalance();
        if($newBalance < 0) {
            echo "Баланс ушел в {$newBalance} (кредитный лимит)" . PHP_EOL;
        }else
        {
            echo "Баланс уменьшился на {$amount}" . PHP_EOL;
        }

    }
}

try {
    $account = new BankAccount(1000);
    $account->deposit(500);
    echo $account->getBalance() . PHP_EOL;

    $account->withdraw(300);
    echo $account->getBalance() . PHP_EOL;

    //$account->withdraw(5000);

    $savings = new SavingsAccount(1000, 5);
    $savings->applyInterest();
    echo $savings->getBalance() . PHP_EOL;

    $credit = new CreditAccount(1000);
    $credit->withdraw(1500);
    echo $credit->getBalance() . PHP_EOL;

    $bank = new BankAccount(500);
    $credit = new CreditAccount(500);

    $bank->pay(200);

    $credit->pay(700);



}catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}

