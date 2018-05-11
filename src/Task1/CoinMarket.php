<?php declare(strict_types=1);

namespace Cryptocurrency\Task1;

class CoinMarket
{
    private $currencies = [];

    public function addCurrency(Currency $currency): void
    {
        $this->currencies[] = $currency;
    }

    public function maxPrice(): float
    {
        $result = 0;

        if(!empty($this->getCurrencies())){
            $result = array_reduce($this->currencies, function($carry, Currency $item){
                return max($item->getDailyPrice(), $carry);//args order is important when daily price == 0
            });
        }
        return $result;
    }

    public function getCurrencies(): array
    {
        return $this->currencies;
    }
}