<?php

require __DIR__ . '/../../vendor/autoload.php';

use Cryptocurrency\Task1\CoinMarket;
use Cryptocurrency\Task3\MarketHtmlPresenter;

use Cryptocurrency\Task1\Bitcoin;
use Cryptocurrency\Task1\Ethereum;
use Cryptocurrency\Task1\Dogecoin;

$market = new CoinMarket();
$marketPresenter = new MarketHtmlPresenter();

$bitcoinCurrency = new Bitcoin(242832.80);
$ethereumCurrency = new Ethereum(19511.47);
$dogecoinCurrency = new Dogecoin(0.13);

$market->addCurrency($bitcoinCurrency);
$market->addCurrency($ethereumCurrency);
$market->addCurrency($dogecoinCurrency);

$presentation = $marketPresenter->present($market);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built-in Web Server</title>
</head>
<body>
<?php echo $presentation ?>
</body>
</html>