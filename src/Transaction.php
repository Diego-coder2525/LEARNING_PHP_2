<?php
declare(strict_types=1);
class Transaction
{
    // public float $amount - $description = 0 - "";
    private float $amount;
    private string $description;

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    //constructor with parameters
    public function __construct(float $amount, string $description)
    {
        $this->amount=$amount;
        $this->description=$description;
    }
    public function addTax(float $rate)
    {
        $this->amount += $this->amount * $rate / 100;
    }
    public function applyDiscount(float $rate){
        $this->amount -= $this->amount * $rate /100;
    }
}