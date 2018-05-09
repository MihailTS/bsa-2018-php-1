<?php declare(strict_types=1);

namespace Cryptocurrency\Task3;

use Cryptocurrency\Task1\CoinMarket;
use Cryptocurrency\Task1\Currency;

class MarketHtmlPresenter
{
    public function present(CoinMarket $market): string
    {
        $coinsList = '<ul>';
        foreach($market->getCurrencies() as $currency){
            /**
             * @var Currency $currency
             */
            $coinsList .= '<li>' .
                    "<img src=\"{$currency->getLogoUrl()}\">" .
                    "<p>{$currency->getName()}: {$currency->getDailyPrice()}</p>" .
                '</li>';
        }
        $coinsList .= '</ul>';
        return $coinsList;
    }
}