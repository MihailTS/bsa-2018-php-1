<?php

namespace Cryptocurrency\Task1;

class Bitcoin implements Currency
{
    private $name = "Bitcoin";
    private $logoUrl = "https://s2.coinmarketcap.com/static/img/coins/32x32/1.png";
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