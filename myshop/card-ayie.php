<?php
    require_once "dbconnect.php";
    $sql = mysqli_query($link,"SELECT * FROM `tbl_products` ORDER BY `prid` ASC");
?>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   

        <title>Card</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php while($row = mysqli_fetch_array($sql)){ ?>
                <div class="product col-lg-3 col-md-6 col-sm-6">
                    <div class="card mt-3">
                        <?php echo '<img class="card-img-top img-thumbnail" src="data:image/jpeg;base64,'.base64_encode($row['image']) .'"  alt="Card image" style="height:150px"/>'; ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $row['prname'] ?></h4>
                            <p class="card-text"><?php echo $row['prname'] ?></p>
                            <p class="card-text">RM <?php echo number_format($row['prprice'],2) ?></p>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    <script>
        $(function() {      
            let isMobile = window.matchMedia("only screen and (max-width: 520px)").matches;

            if (isMobile) {
                $('.product').attr('class','product col-6');
                //Conditional script here
            }
            else{
                $('.product').attr('class','product col-lg-3 col-md-6 col-sm-6');
            }
        });
    </script>
    </body>
</html>