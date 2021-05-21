<?php
    require_once "dbconnect.php";
    $sql = mysqli_query($link,"SELECT * FROM `tbl_products` ORDER BY `prid` ASC");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>Responsive Column Cards</h2>
<p>Resize the browser window to see the effect.</p>

<div class="row">
    
<?php while($row = mysqli_fetch_array($sql)){ ?>
  <div class="column">
    <div class="card">        
      <?php echo '<img class="card-img-top img-thumbnail" src="data:image/jpeg;base64,'.base64_encode($row['image']) .'"  alt="Card image" style="height:150px"/>'; ?>
      <h3><?php echo $row['prname'] ?></h3>
      <p><?php echo $row['prname'] ?></p>
      <p>RM <?php echo number_format($row['prprice'],2) ?></p>
    </div>
  </div>
<?php }?> 
  <!-- <div class="column">
    <div class="card">
      <h3>Card 2</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 3</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 4</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div> -->
</div>

</body>
</html>