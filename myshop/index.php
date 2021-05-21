<?php
  require_once "dbconnect.php";
  $sql = mysqli_query($link,"SELECT * FROM `tbl_products` ORDER BY `prid` ASC");
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to MyShop</title>
  <style>

body {
  font-family: Arial, Helvetica, sans-serif;
}


    body {background-color: powderblue;}
    h1 {color: red;}
    p {color: blue;}

    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
  background-color: coral;
}

* {
  box-sizing: border-box;
}

.img-container {
  float: left;
  width: 33%;
  padding: 15px;
}



@charset "UTF-8";
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");
.modal .modal-content .modal-body {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
.modal .modal-content .modal-body::-webkit-scrollbar {
  display: none;
}
body {
  margin: 0;
  background-color: #eceff1;
  font-family: "Poppins", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.warning {
  display: block !important;
  padding: 12px 15px !important;
  background-color: rgba(244, 67, 54, 0.25) !important;
  border-radius: 8px !important;
  font-weight: 500 !important;
  color: #e53935 !important;
  text-align: left !important;
}
.warning > i {
  position: relative;
  top: 1px;
  margin-right: 8px;
  transform: scale(1.25);
}
#mega-button {
  display: flex;
  align-items: center;
  justify-content: center;
  position: fixed;
  bottom: 15px;
  right: 15px;
  width: 50px;
  height: 50px;
  cursor: default;
  transition: all 0.15s ease-out;
  z-index: 1;
  will-change: width;
}
#mega-button > .tooltip {
  padding: 5px 10px;
  position: absolute;
  right: 10px;
  top: -9px;
  transform: translateY(-100%);
  white-space: nowrap;
  background-color: #fff;
  border-radius: 8px;
  filter: drop-shadow(0 2px 2px rgba(120, 144, 156, 0.5));
  box-shadow: inset 0 0 0 1px rgba(120, 144, 156, 0.1);
  font-weight: 500;
  color: #1e4989;
  -webkit-animation: tooltip-hover;
          animation: tooltip-hover;
  /* @keyframes duration | easing-function | delay |
  iteration-count | direction | fill-mode | play-state | name */
  -webkit-animation: 1s ease-in-out 0s infinite alternate both tooltip-hover;
          animation: 1s ease-in-out 0s infinite alternate both tooltip-hover;
  transition: all 0.15s ease-out;
  pointer-events: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  will-change: opacity;
}
#mega-button > .tooltip::before {
  content: "";
  display: block;
  position: absolute;
  bottom: 1px;
  right: 8px;
  width: 12px;
  height: 6px;
  background-color: inherit;
  -webkit-clip-path: polygon(0 0, 100% 0, 50% 100%);
          clip-path: polygon(0 0, 100% 0, 50% 100%);
  transform: translateY(100%);
}
#mega-button::before {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  right: 0;
  top: 0;
  width: 50px;
  height: 50px;
  padding-top: 4px;
  background: 100% 100%/250% 100% #fff linear-gradient(135deg, transparent 33%, #2c92c8 66%, #892cc8) no-repeat;
  border-radius: 50%;
  content: "";
  font-family: "Font Awesome 5 Pro";
  font-size: 32px;
  font-weight: 400;
  color: #fff;
  transition: inherit;
  box-sizing: border-box;
  cursor: inherit;
  box-shadow: 0 10px 20px -10px #1a237e;
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  will-change: transform, background-color, box-shadow;
}
#mega-button > .sub-button {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 50%;
  left: 25px;
  width: 36px;
  height: 36px;
  background: #2c92c8;
  border-radius: 50%;
  text-decoration: none !important;
  box-shadow: 0 10px 20px -10px #1a237e;
  transform: translate(-50%, -50%) scale(0.75);
  transition: inherit;
  z-index: -1;
  will-change: transform, transition-duration;
}
#mega-button > .sub-button::before {
  font-family: "Font Awesome 5 Pro";
  color: #fff;
  font-size: 20px;
  font-weight: 400;
  transform: rotate(-90deg);
  transition: inherit;
  will-change: transform;
}
#mega-button > .sub-button#buttons--write::before {
  content: "";
}
#mega-button > .sub-button#buttons--archive::before {
  content: "";
}
#mega-button > .sub-button#buttons--delete::before {
  content: "";
}
#mega-button:hover {
  width: calc(50px + 2px + 123px);
}
#mega-button:hover::before {
  transform: rotate(45deg) scale(0.675);
  padding-right: 2px;
  box-shadow: 7.5px 7.5px 20px -10px rgba(55, 71, 79, 0);
  background: -100% 100%/250% 100% rgba(144, 164, 174, 0.625) linear-gradient(135deg, transparent 33%, #2c92c8 66%, #892cc8) no-repeat;
}
#mega-button:hover::after {
  width: 200px;
}
#mega-button:hover > .sub-button::before {
  transform: rotate(0deg);
}
#mega-button:hover > .sub-button:nth-of-type(1) {
  transform: translate(calc(-50% + 50px + 0% + 0px + 2px), -50%) scale(1);
  transition-delay: 0.1s;
}
#mega-button:hover > .sub-button:nth-of-type(1):hover {
  transform: translate(calc(-50% + 50px + 0% + 0px + 2px), -50%) scale(1.18);
  transition-duration: 0.15s;
}
#mega-button:hover > .sub-button:nth-of-type(2) {
  transform: translate(calc(-50% + 50px + 100% + 5px + 2px), -50%) scale(1);
  transition-delay: 0.05s;
}
#mega-button:hover > .sub-button:nth-of-type(2):hover {
  transform: translate(calc(-50% + 50px + 100% + 5px + 2px), -50%) scale(1.18);
  transition-duration: 0.15s;
}
#mega-button:hover > .sub-button:nth-of-type(3) {
  transform: translate(calc(-50% + 50px + 200% + 10px + 2px), -50%) scale(1);
  transition-delay: 0s;
}
#mega-button:hover > .sub-button:nth-of-type(3):hover {
  transform: translate(calc(-50% + 50px + 200% + 10px + 2px), -50%) scale(1.18);
  transition-duration: 0.15s;
}
#mega-button:hover > .sub-button:hover {
  background-color: #3949ab;
}
#mega-button:hover > .sub-button:hover::before {
  transform: scale(0.85);
}
#mega-button:hover .tooltip, .modal:target ~ #mega-button .tooltip {
  opacity: 0;
}
.modal {
  display: none;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: transparent;
  z-index: 2;
}
.modal > .modal-close::before {
  content: "";
  display: block;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  background-color: rgba(38, 50, 56, 0.5);
}
.modal .modal-content {
  display: flex;
  flex-direction: column;
  position: fixed;
  left: 50%;
  top: 50%;
  width: 90%;
  max-width: 600px;
  max-height: 90%;
  overflow: visible;
  transform: translate(-50%, -50%);
}
.modal .modal-content > div:first-of-type {
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}
.modal .modal-content > div:last-of-type {
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
}
.modal .modal-content > .modal-close::after {
  content: "";
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  right: 0;
  top: 0;
  width: 28px;
  height: 28px;
  z-index: -1;
  background-color: #546e7a;
  border-radius: 50%;
  font-family: "Font Awesome 5 Pro";
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  transform: translate(37.5%, -37.5%);
  transition: all 0.15s ease-out;
  z-index: 1;
}
.modal .modal-content > .modal-close ~ div:first-of-type {
  border-top-right-radius: 0;
}
.modal .modal-content > .modal-close:hover::after {
  background-color: #263238;
}
.modal .modal-content .modal-header {
  padding: 10px 5px;
  background-color: #37474f;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
}
.modal .modal-content .modal-body {
  flex: 1;
  display: flex;
  flex-direction: column;
  padding: 15px;
  overflow-y: auto;
  background-color: #eceff1;
}
.modal .modal-content .modal-body p {
  color: #455a64;
  text-align: center;
}
.modal .modal-content .modal-body p + p, .modal .modal-content .modal-body p + .modal-actions {
  margin-top: 0;
}
.modal .modal-content .modal-body > :first-child {
  margin-top: 0;
}
.modal .modal-content .modal-body label {
  margin-bottom: 4px;
  font-weight: 500;
  color: #78909c;
}
.modal .modal-content .modal-body label:not(:first-of-type) {
  margin-top: 10px;
}
.modal .modal-content .modal-body input, .modal .modal-content .modal-body textarea {
  font-family: inherit;
}
.modal .modal-content .modal-body input:focus, .modal .modal-content .modal-body textarea:focus {
  outline: 0 !important;
}
.modal .modal-content .modal-body input {
  display: block;
  width: 235px;
  padding: 4px 10px;
  align-self: flex-start;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #303f9f;
  border: none;
  border-radius: 10px;
  font-size: 16px;
  font-weight: 400;
  line-height: 26px;
  color: #455a64;
  box-sizing: border-box;
  cursor: pointer;
  transition: all 0.15s ease-out;
  will-change: width, padding, background-color, border-radius, font-size, font-weight;
}
.modal .modal-content .modal-body input::-webkit-input-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-size: inherit;
  font-weight: 500;
  color: #fff;
  -webkit-transition: inherit;
  transition: inherit;
  will-change: font-size, font-weight, color;
}
.modal .modal-content .modal-body input:-moz-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-size: inherit;
  font-weight: 500;
  color: #fff;
  -moz-transition: inherit;
  transition: inherit;
  will-change: font-size, font-weight, color;
}
.modal .modal-content .modal-body input::-moz-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-size: inherit;
  font-weight: 500;
  color: #fff;
  -moz-transition: inherit;
  transition: inherit;
  will-change: font-size, font-weight, color;
}
.modal .modal-content .modal-body input:-ms-input-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-size: inherit;
  font-weight: 500;
  color: #fff;
  -ms-transition: inherit;
  transition: inherit;
  will-change: font-size, font-weight, color;
}
.modal .modal-content .modal-body input:focus, .modal .modal-content .modal-body input:valid {
  width: 100%;
  padding: 4px 0;
  background-color: transparent;
  border-radius: 0;
  cursor: text;
}
.modal .modal-content .modal-body input:focus::-webkit-input-placeholder, .modal .modal-content .modal-body input:valid::-webkit-input-placeholder {
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body input:focus:-moz-placeholder, .modal .modal-content .modal-body input:valid:-moz-placeholder {
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body input:focus::-moz-placeholder, .modal .modal-content .modal-body input:valid::-moz-placeholder {
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body input:focus:-ms-input-placeholder, .modal .modal-content .modal-body input:valid:-ms-input-placeholder {
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body input:valid:not(:focus) {
  font-size: 20px;
  font-weight: 500;
}
.modal .modal-content .modal-body textarea {
  display: block;
  min-height: 150px;
  padding: 8px 10px;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  resize: vertical;
  background-color: #fff;
  border: none;
  border-radius: 10px;
  box-shadow: 0 5px 10px -5px #37474f;
  font-size: 16px;
  font-weight: 400;
  line-height: 18px;
  color: #455a64;
  box-sizing: border-box;
}
.modal .modal-content .modal-body textarea::-webkit-input-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body textarea:-moz-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body textarea::-moz-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body textarea:-ms-input-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body .modal-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 20px;
}
.modal .modal-content .modal-body .modal-actions a, .modal .modal-content .modal-body .modal-actions button {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 40px;
  padding: 0 15px;
  background-color: #607d8b;
  border: none;
  border-radius: 20px;
  box-shadow: 0 5px 10px -15px #455a64;
  font-family: inherit;
  font-size: 16px;
  font-weight: 500;
  color: #fff;
  text-decoration: none !important;
  transition: box-shadow 0.15s ease-out;
  will-change: box-shadow;
  cursor: pointer;
}
.modal .modal-content .modal-body .modal-actions a.write, .modal .modal-content .modal-body .modal-actions button.write {
  background-color: #2196f3;
}
.modal .modal-content .modal-body .modal-actions a.archive, .modal .modal-content .modal-body .modal-actions button.archive {
  background-color: #ef6c00;
}
.modal .modal-content .modal-body .modal-actions a.delete, .modal .modal-content .modal-body .modal-actions button.delete {
  background-color: #f44336;
}
.modal .modal-content .modal-body .modal-actions a.write, .modal .modal-content .modal-body .modal-actions button.write {
  box-shadow: 0 5px 10px -15px #0d47a1;
}
.modal .modal-content .modal-body .modal-actions a.archive, .modal .modal-content .modal-body .modal-actions button.archive {
  box-shadow: 0 5px 10px -15px #bf360c;
}
.modal .modal-content .modal-body .modal-actions a.delete, .modal .modal-content .modal-body .modal-actions button.delete {
  box-shadow: 0 5px 10px -15px #b71c1c;
}
.modal .modal-content .modal-body .modal-actions a:hover, .modal .modal-content .modal-body .modal-actions button:hover {
  box-shadow: 0 5px 10px -5px #455a64;
}
.modal .modal-content .modal-body .modal-actions a:hover.write, .modal .modal-content .modal-body .modal-actions button:hover.write {
  box-shadow: 0 5px 10px -5px #0d47a1;
}
.modal .modal-content .modal-body .modal-actions a:hover.archive, .modal .modal-content .modal-body .modal-actions button:hover.archive {
  box-shadow: 0 5px 10px -5px #bf360c;
}
.modal .modal-content .modal-body .modal-actions a:hover.delete, .modal .modal-content .modal-body .modal-actions button:hover.delete {
  box-shadow: 0 5px 10px -5px #b71c1c;
}
.modal .modal-content .modal-body .modal-actions a + a, .modal .modal-content .modal-body .modal-actions a + button, .modal .modal-content .modal-body .modal-actions button + a, .modal .modal-content .modal-body .modal-actions button + button {
  margin-left: 4px;
}
.modal:target {
  display: block;
}
@-webkit-keyframes tooltip-hover {
  from {
    transform: translateY(-100%);
  }
  to {
    transform: translateY(calc(-100% - 5px));
  }
}
@keyframes tooltip-hover {
  from {
    transform: translateY(-100%);
  }
  to {
    transform: translateY(calc(-100% - 5px));
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
</head>  
<body>

<ul>
  <li><a href="#home" class="active">Home</a></li>
  <li><a href="newproduct.html">New Item</a></li>
</ul>

<h1>Welcome to Gaming Shop</h1>
<p>We've expanded our online store with a variety of popular gaming brands — including Razr, HyperX, and Logitech Gaming. We also have dozens of popular PC games on sale in our Legion Game Store. Lenovo is now your destination for the latest computers, gear, and all things gaming..</p>



<script src="https://kit.fontawesome.com/07afc061fe.js" crossorigin="anonymous"></script>
<div id="mega-button">
  <div class="tooltip">Click me !</div>
  <a class="sub-button" id="buttons--write" href="newproduct.html"></a>
  <!-- <a class="sub-button" id="buttons--archive" href="#modal-archive"></a>
  <a class="sub-button" id="buttons--delete" href="#modal-delete"></a> -->
</div>
  

  
</table>

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
                            
                            <p class="card-text">RM <?php echo number_format($row['prprice'],2) ?></p>
                            <p class="card-text">Quantity :&nbsp;<?php echo $row['prqty'] ?></p>
                            <p class="card-text">Type :&nbsp;<?php echo $row['prtype'] ?></p>
                            
                            <!-- <a href="#" class="btn btn-primary">Buy Now</a>
                            <a href="#" class="btn btn-primary">Add to Cart</a> -->
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


</body>
</html>






