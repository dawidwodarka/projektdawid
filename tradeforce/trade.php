-*<?php

session_start();

if(!isset($_SESSION['zalogowany']))
{
  header('Location: index.php');
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>TRADEFORCE.PL</title>

    <style>

					body{
						margin: auto;
						background: #1e222d;

					}

					#header {
						box-sizing: border-box;
						/* width:vh; */
						height:105px;
						display: inline-block;
						text-algin:center;
						background:#0996c7;
						opacity: 100%;
						margin: 0 auto;
						/* position: static; */
						/* border-bottom: 5px orange solid; */
						display:flex;
		
					}

					#logo{
						/* font-size: 40px; */
						margin-top: 3px;
						margin: 10 auto;
						position: absolute;
						right: 43%;
						display:flex;
						font-family: 'Fredoka One', cursive;
						font-size: 20px;
					}

					#section{
						font-family: 'Fredoka One', cursive;
						background:#fef9d0;
            
					}

          #login{
            position: absolute;
            right: 200px;
            margin-top: 200px
          }

          #userinfo{
            background:red;
          }

</style>

</head>
<body>
  <?php
  
  echo "<p>Witaj ".$_SESSION['user']."!</p";

?>
  <div id="login">
<form action="logout.php" method="post">
  <input type="submit" value="Wyloguj się" />
  
          <!-- </form> -->
          </div>
<div id="header">
<div id="logo">
<h1>TRADEFORCE</h1>
</div></div>

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
<div id="section">
<center><h1>THE MOST IMPORTANT WORLD STOCK MARKET INDICES</h1></center></div>
  <div id="tradingview_2963f"></div>
  <div class="tradingview-widget-copyright"><span class="blue-text"></span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.MediumWidget(
  {
  "symbols": [
    [
      "NASDAQ",
      "CURRENCYCOM:US100|1D"
    ],
    [
      "SP500",
      "CURRENCYCOM:US500|1D"
    ],
    [
      "DOW JONES 30",
      "FOREXCOM:DJI|1D"
    ],
    [
      "DAX 30",
      "GLOBALPRIME:GER30|1D"
    ],
    [
      "FTSE 100",
      "GLOBALPRIME:UK100|1D"
    ],
    [
      "WIG 20",
      "GPW:WIG20|1D"
    ],
    [
      "NIKKEI 225",
      "GLOBALPRIME:JPN225|1D"
    ],
    [
      "HANG SENG",
      "GLOBALPRIME:HK50|1D"
    ],
    [
      "SPI 200",
      "GLOBALPRIME:AUS200|1D"
    ],
    [
      "ES 35",
      "GLOBALPRIME:ES35|1D"
    ],
    [
      "SMI 20",
      "CAPITALCOM:SW20|1D"
    ],
    [
      "FRA 40",
      "GLOBALPRIME:FRA40|1D"
    ],
    [
      "AEX 25",
      "CURRENCYCOM:NL25|1D"
    ]
  ],
  "chartOnly": false,
  "width": "100%",
  "height": "400",
  "locale": "pl",
  "colorTheme": "dark",
  "gridLineColor": "#2a2e39",
  "trendLineColor": "#1976d2",
  "fontColor": "#787b86",
  "underLineColor": "rgba(55, 166, 239, 0.15)",
  "isTransparent": false,
  "autosize": false,
  "container_id": "tradingview_2963f"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
<div id="section">
<center><h1>THE MOST IMPORTANT WORLD CURRENCY PAIRS </h1></center></div>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://pl.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
  {
  "width": "100%",
  "height": "1000",
  "currencies": [
    "EUR",
    "USD",
    "JPY",
    "GBP",
    "CHF",
    "AUD",
    "CAD",
    "NZD",
    "CNY",
    "TRY",
    "NOK",
    "MXN",
    "PLN",
    "RUB"
  ],
  "isTransparent": false,
  "colorTheme": "dark",
  "locale": "pl"
}
  </script>
</div>
<!-- TradingView Widget END -->



</body>
</html>