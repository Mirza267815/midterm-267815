<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
      form {border: 3px solid #f1f1f1;}

      * {box-sizing: border-box;}

      body {
      background-color: #f2f2f2;
      }

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #48b037;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}


    </style>
    <title>Main Page</title>
</head>

<body>

<div class="header">
  <a href="mainpage.php" class="logo">My Shop</a>
  <div class="header-right">
    <a class="active" href="newproduct.html">Insert</a>
  </div>
</div>

</body>

</html>



<?php
include_once("dbconnect.php");

try {
    $sql = "SELECT * FROM tbl_products";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $tbl_products = $stmt->fetchAll();

    echo "<p><h1 align='center'>My Shop</h1></p>";
    echo "<table border='1' align='center'>
    <tr>
    <th>Picture</th>
    
    <th>Item Name</th>
    <th>Item Type</th>
    <th>Price</th>
    <th>Quantity</th>
    
    </tr>";

    foreach($tbl_products as $tbl_products) {
        echo "<tr>";
        echo "<tr><td><img src='data:image/jpeg;base64,".base64_encode($tbl_products['image'])."'width='250' height='250'></td>";
        
        echo "<td>".$tbl_products['prname']."</td>";
        echo "<td>".$tbl_products['prtype']."</td>";
        echo "<td>".$tbl_products['prprice']."</td>";
        echo "<td>".$tbl_products['prqty']."</td>";
       
        echo "<tr>";
    }
    echo "</table>";

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

?>