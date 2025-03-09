<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
    <link rel="stylesheet" href="style1.css" type="text/css" />

</head>

<body>
<?php
    include 'includes/header.php';
    ?>
    
    <div class="banner-container">
        <h2 class="white pb-3">Happiness per Square Foot</h2>
        <div class="mx-auto" style="width: 300px; margin-left: 450.500px">
            <form class="form-inline" id="city"  name='city' action="propertylist.php" method="GET">
                <input class="form-control mr-sm-2" type="search" placeholder="Enter your city to search for PGs"
                    aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">search</button>
            </form>
        </div>
    </div>
    <div class="page-container" styles style="padding-top:50px; padding-bottom:0px;">
        <h1 styles style="padding-left:277px; margin-bottom: 10px; ">Major cities</h1>
    </div>
    <div class="row" style=" border:white;">
        <div class="col" style=" border:white;">
          <a href="property_list.php?city=Delhi">
            <img class="imagne" src="img\delhi.png" class="w3-circle" alt="Avatar" >
          </a>
        </div>
        <div class="col " style=" border:white;">
            <a href="property_list.php?city=Mumbai">
                <img class="imagne" src="img\mumbai.png" class="w3-circle" alt="Alps" >
              </a>
        </div>
        <div class="col" style=" border:white;">
            <a href="property_list.php?city=Bangalore">
                <img class="imagne" src="img\bangalore.png" class="w3-circle" alt="Alps" >
              </a>
        </div>
        <div class="col" style=" border:white;">
            <a href="property_list.php?city=Chennai">
                <img class="imagne" src="img\chennai.png" class="w3-circle" alt="Alps" >
              </a>
        </div>
      </div>
      <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>