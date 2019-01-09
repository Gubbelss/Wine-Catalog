<?php
$servername = "localhost";
$username = "my_wine_catalog__user";
$password = "my_wine_catalog__user";
$dbname = "my_wine_catalog";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


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


/*
$sql = "INSERT INTO MyWineCatalog (weingut, winzer, region, jahrgang, volume, quantity, self_score, critic_score, price_perbottle, price_total, currency )
VALUES ('Big Bitch', 'Bitch', 'Bitch Country', '1000', '1.5', '3', '2.3', '4', '100.44', '301.32', '€')";
*/

if(!empty($_POST['To_The_Catalog_And_Beyond'])) // check if button is clicked
{

    //get the values from the POST REQUEST
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

    //errors for empty fields
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

    //errors for wrong inputs


  //if submitted, then validate for empty fields and/or wrong input
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

}



$conn->close();
?>



<html>
<head>
    <title>Wine-Catalog</title>
    <link href="winestyle.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="wrap">
        <form method="post" action="" id="winecatalogform" >
        <div>
          <label for="weingut">Weingut</label>
          <input <?php echo $weingut_error_empty; ?> type="text" name="weingut" >
          <br>
          <label for="winzer">Winzer</label>
          <input <?php echo $winzer_error_empty; ?> type="text" name="winzer" >
          <br>
          <label for="region">Region</label>
          <input <?php echo $region_error_empty; ?> type="text" name="region" >
          <br>
          <label for="jahrgang">Jahrgang</label>
          <input <?php echo $jahrgang_error_empty; ?> type="number" name="jahrgang" >
          <br>
          <label for="volume">Volume</label>
          <input <?php echo $volume_error_empty; ?> type="number" name="volume" >
          <br>
          <label for="quantity">Quantity</label>
          <input <?php echo $quantity_error_empty; ?> type="number" name="quantity" >
          <br>
          <label for="self_score">Self_score</label>
          <input <?php echo $self_score_error_empty; ?> type="number" name="self_score" >
          <br>
          <label for="critic_score">Critic_score</label>
          <input <?php echo $critic_score_error_empty; ?> type="number" name="critic_score" >
          <br>
          <label for="price_perbottle">Price_perbottle</label>
          <input <?php echo $price_perbottle_error_empty; ?> type="number" name="price_perbottle" >
          <br>
          <label for="price_total">Price_total</label>
          <input <?php echo $price_total_error_empty; ?> type="number" name="price_total" >
          <br>
          <label for="currency">Currency</label>
          <input <?php echo $currency_error_empty; ?> type="text" name="currency" >
          <br>

        </div>
        <input type="submit" value="To_The_Catalog_And_Beyond" name="To_The_Catalog_And_Beyond"></button>
       </form>
	</div>
</body>
</html>
