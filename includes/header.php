<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Life</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link href="css/common.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
    <link rel="stylesheet" href="style1.css" type="text/css" />

</head>

<body>
<div class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">

<?php
 //Check if user is logged-in or not
 if (!isset($_SESSION["user_id"])) {
 ?>
<li class="nav-item">
    <a class="nav-link" href="signup.php" data-toggle="modal" data-target="#signup-modal">
        <i class="fas fa-user"></i>Signup
    </a>
    
</li>
<div class="nav-vl"></div>
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
        <i class="fas fa-sign-in-alt"></i>Login
    </a>
</li>
<?php
    }   
    else
    {
?>
     <div class='nav-name'>
        Hi, <?php echo $_SESSION["full_name"] ?>
    </div>
    <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-user"></i>Dashboard
        </a>
    </li>
    <div class="nav-vl"></div>
        <li class="nav-item">
            <a class="nav-link" href="logout.php">
                <i class="fas fa-sign-out-alt"></i>Logout
            </a>
        </li>
 <?php
    }
?>
</ul>
        </div>
    </nav>
</div>
</body>
</html>
