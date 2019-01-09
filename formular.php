<?php

  require_once ('sql_connector.php');
  require_once ('my_wine_catalog.php');



  // Objekt erzeugen. Datenbank verbindung wird hergestellt.
  $sql_connector = new sql_connector ('localhost', 'my_wine_catalog__user', 'my_wine_catalog__user', 'my_wine_catalog');

/*
// sql to create table
$sql = "CREATE TABLE MyWineCatalog (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
weingut VARCHAR(30) NOT NULL,
winzer VARCHAR(30) NOT NULL,
region VARCHAR(30) NOT NULL,
jahrgang SMALLINT(4) NOT NULL,
volume FLOAT(3, 2) NOT NULL,
quantity TINYINT(3) NOT NULL,
self_score FLOAT(2, 1) NOT NULL,
critic_score FLOAT(2, 1) NOT NULL,
price_perbottle DOUBLE(10, 2) NOT NULL,
price_total DOUBLE(20, 3) NOT NULL,
currency VARCHAR(1) NOT NULL,
)";
*/

/*
$sql = "INSERT INTO MyWineCatalog (weingut, winzer, region, jahrgang, volume, quantity, self_score, critic_score, price_perbottle, price_total, currency )
VALUES ('Big Bitch', 'Bitch', 'Bitch Country', '1000', '1.5', '3', '2.3', '4', '100.44', '301.32', '€')";
*/

//Fehlermeldungen für die leeren Felder

$error = false;

$weingut_error_empty = '';
$winzer_error_empty = '';
$region_error_empty = '';
$jahrgang_error_empty = '';
$volume_error_empty = '';
$quantity_error_empty = '';
$self_score_error_empty = '';
$critic_score_error_empty = '';
$price_perbottle_error_empty = '';
$price_total_error_empty = '';
$currency_error_empty = '';

// Überprüft ob der Button geklicked wurde
if(!empty($_POST['To_The_Catalog_And_Beyond']))
{

    //Die Werte werden vom POST request genommen
    $weingut = $_POST['weingut'];
    $winzer = $_POST['winzer'];
    $region = $_POST['region'];
    $jahrgang = $_POST['jahrgang'];
    $volume = $_POST['volume'];
    $quantity = $_POST['quantity'];
    $self_score = $_POST['self_score'];
    $critic_score = $_POST['critic_score'];
    $price_perbottle = $_POST['price_perbottle'];
    $price_total = $_POST['price_total'];
    $currency = $_POST['currency'];




  //Fehlermeldungen werden überpruft, ob leer, ob falscher text...
	if(empty($weingut))
	{
		$error=true;
    $weingut_error_empty='Weingut is empty. Please enter your weingut.';
    }
/*      elseif (!preg_match("^[A-Za-z]+((\s)?((\'|\-|\.)?([A-Za-z])+))*$", $weingut)
      {
        $error=true
        $weingut_error='Weingut is wrong. Please enter a correct weingut.';
        }
          else
          {
            $error=false;
            }
*/
  if(empty($winzer))
  {
    $error=true;
    $winzer_error_empty='Winzer is empty. Please enter your Winzer.';
    }

  if(empty($region))
    {
      $error=true;
      $region_error_empty='Region is empty. Please enter your Region.';
      }
  if(empty($jahrgang))
    {
    	$error=true;
      $jahrgang_error_empty='Jahrgang is empty. Please enter your jahrgang.';
      }

  if(empty($volume))
    {
      $error=true;
      $volume_error_empty='Volume is empty. Please enter your volume.';
      }


  if(empty($quantity))
    {
      $error=true;
      $quantity_error_empty='Quantity is empty. Please enter your quantity.';
      }

  if(empty($self_score))
    {
      $error=true;
      $self_score_error_empty='Self_score is empty. Please enter your self_score.';
      }

  if(empty($critic_score))
    {
      $error=true;
      $critic_score_error_empty='Critic_score is empty. Please enter your critic_score.';
      }

  if(empty($price_perbottle))
    {
      $error=true;
      $price_perbottle_error_empty='Price_perbottle is empty. Please enter your price_perbottle.';
      }

  if(empty($price_total))
    {
      $error=true;
      $price_total_error_empty='Price_total is empty. Please enter your price_total.';
      }

  if(empty($currency))
    {
      $error=true;
      $currency_error_empty='Currency is empty. Please enter your currency.';
      }
  //Falls alles stimmt, werden die Werte übergeben und in die Datenbank eingetragen

 if ($error==false) {
  $my_wine_catalog = new my_wine_catalog ($weingut, $winzer, $region, $jahrgang, $volume, $quantity, $self_score, $critic_score, $price_perbottle, $price_total, $currency);
    $sql_connector->insert($my_wine_catalog);

  }

}


$sql_connector->connection -> close();
?>



<html>
<head>
    <title>Wine-Catalog</title>
    <link href="winestyle.css" rel="stylesheet" type="text/css">
</head>
<body>
  <main id="box">
    <div id="wrap">
        <form method="post" action="formular.php" id="winecatalogform" >
        <div>
          <label for="weingut">Weingut</label>
          <input type="text" name="weingut" >
          <?php echo $weingut_error_empty; ?>
          <br>
          <label for="winzer">Winzer</label>
          <input type="text" name="winzer" >
          <?php echo $winzer_error_empty; ?>
          <br>
          <label for="region">Region</label>
          <input type="text" name="region" >
          <?php echo $region_error_empty; ?>
          <br>
          <label for="jahrgang">Jahrgang</label>
          <input  type="number" name="jahrgang">
          <?php echo $jahrgang_error_empty; ?>
          <br>
          <label for="volume">Volume</label>
          <input  type="number" step="0.1" name="volume" >
          <?php echo $volume_error_empty; ?>
          <br>
          <label for="quantity">Quantity</label>
          <input  type="number" name="quantity">
          <?php echo $quantity_error_empty; ?>
          <br>
          <label for="self_score">Self_score</label>
          <input  type="text" name="self_score">
          <?php echo $self_score_error_empty; ?>
          <br>
          <label for="critic_score">Critic_score</label>
          <input  type="text" name="critic_score">
          <?php echo $critic_score_error_empty; ?>
          <br>
          <label for="price_perbottle">Price_perbottle</label>
          <input  type="number" step="0.01" name="price_perbottle">
          <?php echo $price_perbottle_error_empty; ?>
          <br>
          <label for="price_total">Price_total</label>
          <input type="number" step="0.01" name="price_total">
           <?php echo $price_total_error_empty; ?>
          <br>
          <label for="currency">Currency</label>
          <input type="text" name="currency" >
           <?php echo $currency_error_empty; ?>
          <br>

        </div>
        <input type="submit" value="To_The_Catalog_And_Beyond" name="To_The_Catalog_And_Beyond">
        <input type="button" onclick="history.go(-1)" value="Refresh">
       </form>
	</div>
  </main>


</body>
</html>
