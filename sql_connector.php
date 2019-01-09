<?php

class sql_connector {
  public $connection;

  public function insert (my_wine_catalog $my_wine_catalog) {
    $weingut = $my_wine_catalog->weingut;
    $winzer = $my_wine_catalog->winzer;
    $region = $my_wine_catalog->region;
    $jahrgang = $my_wine_catalog->jahrgang;
    $volume = $my_wine_catalog->volume;
    $quantity = $my_wine_catalog->quantity;
    $self_score = $my_wine_catalog->self_score;
    $critic_score = $my_wine_catalog->critic_score;
    $price_perbottle = $my_wine_catalog->price_perbottle;
    $price_total = $my_wine_catalog->price_total;
    $currency = $my_wine_catalog->currency;


    $sql = "INSERT INTO MyWineCatalog (weingut, winzer, region, jahrgang, volume, quantity, self_score, critic_score, price_perbottle, price_total, currency)
            VALUES ('$weingut', '$winzer', '$region', $jahrgang, $volume, $quantity, $self_score, $critic_score, $price_perbottle, $price_total, '$currency')";

        if (mysqli_query($this->connection, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($this->connection);
            }

  }

  function __construct($servername, $username, $password, $dbname) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

        }
    $this->connection = $conn;
    }


}











?>
