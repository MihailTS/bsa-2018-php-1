<?php

namespace Cryptocurrency\Task1;

class Dogecoin implements Currency
{

    private $name = "Dogecoin";
    private $logoUrl = "https://s2.coinmarketcap.com/static/img/coins/32x32/74.png";
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