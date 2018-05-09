<?php

namespace Cryptocurrency\Task1;

class Ethereum implements Currency
{
    private $name = "Ethereum";
    private $logoUrl = "https://s2.coinmarketcap.com/static/img/coins/32x32/1027.png";
    private $dailyPrice;


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