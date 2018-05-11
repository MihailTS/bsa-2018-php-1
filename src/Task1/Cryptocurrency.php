<?php

namespace Cryptocurrency\Task1;

class Cryptocurrency implements Currency
{
    protected $name;
    protected $logoUrl;
    protected $dailyPrice;

    public function __construct(float $dailyPrice)
    {
        $this->dailyPrice = $dailyPrice;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDailyPrice(): float
    {
        return $this->dailyPrice;
    }

    public function getLogoUrl(): string
    {
        return $this->logoUrl;
    }
}