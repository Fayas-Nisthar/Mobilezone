<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

    $userID = $_SESSION['id'];

 ?>
<!DOCTYPE html>
<html>
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="x-icon" href="icons\logo2.png">
        <link href="style.css" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
        <title>Mobilezone</title>

    </head>
    <body class="bg-light">

        <div class="container">
            
            <nav class="navbar sticky-top navbar-light bg-light border-bottom border-2">
                <div class="container-fluid">

                    <a class="navbar-brand" href="product.php">
                        <img src="icons\logo1.png" alt="" width="65" height="40">
                        </a>
                    <ul class="nav justify-content-end">
                    <li class="nav-item">
                            <a class="nav-link link-dark active" href="product.php"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-dark " href="sell.php"><b>Sell</b></a>
                        </li>
                        <li class="nav-item my-auto">
                                <form id="user" name="menuForm" method="POST" class="" action="productMenu.php">
                                    <select onChange="user.submit()" name="userSel" id="usersel" class="userButton bg-light">
                                        ><option hidden value="user"><?php echo $_SESSION['name']; ?></option>
                                        <option value="Dashbord">Dashbord</option>
                                        <option value="logout">Logout</option>
                                    </select>
                                </form>
                        </li>
                      </ul>


                </div>   
            </nav>

            <section class="container mt-1">
                <div class="row">
                   
                <div class="col-sm-4 list-group">
                        <a href="userDashbord.php" class="list-group-item list-group-item-action">Dashbord</a>
                        <a href="userOrders.php" class="list-group-item list-group-item-action">Orders</a>
                        <a href="userAds.php" class="list-group-item list-group-item-action">Mobile Ads</a>
                        <a href="userFeedback.php" class="list-group-item list-group-item-action active">Feedback</a>
                        <a href="userUpdate.php" class="list-group-item list-group-item-action">Update Account</a>
                        <a href="userDeleteDashbord.php" class="list-group-item list-group-item-action">Delete Account</a>
                    </div>
                   
                    <div class="col-sm-8 feedMargin mx-auto">
                        <h6>Your Feedback</h6>

                        <form method="POST" action="feedback.php">

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <textarea id="feedback" name="feedback" class="form-control" rows="4" required></textarea>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Send</button>
                        </div>

                    </div>
            </section>
    </body>
</html>
<?php

}else{

header("Location: loginForm.php");

exit();

}
