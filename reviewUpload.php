<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

    $userID = $_SESSION['id'];

    include_once 'dbConnect.php';

    $getsql = "SELECT * FROM mobiles,orders WHERE orders.userID = ".$userID." AND mobiles.phoneID = orders.phoneID;";
    $result = mysqli_query($conn,$getsql);
    $resultCheck = mysqli_num_rows($result);

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
                            <a class="nav-link link-dark " href="product.php"><b>Home</b></a>
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

            <div class="col-sm-8 feedMargin mx-auto">
                        <h6></h6>
                        <?php  if($resultCheck > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $phoneID = $row['phoneID'];
                            ?>
                                <div class="card p-1">
                                    <div class="row">
                                        <img src="<?php echo $row['imageLocation']?>" class="col-sm-3 col-4 h-50 my-auto img-fluid float-left">
                                         <textarea placeholder="Enter the query" id="feedback" name="feedback" class="col-sm-6 col-4 h-50 my-auto" rows="4" required></textarea>

                                         <div class="col-sm-3 col-2 py-5">
                                         <form class="mt-1" method="POST" id="upload" action="Querys.php">
                                                    <select hidden name="phoneID">
                                                        <option value="<?php echo $phoneID?>" selected hidden></option>
                                                    </select> 
                                                    <button  class="btn btn-secondary mx-1">Upload</button>
                                                </form>
                                        </div>
                                     </div>
                                </div>

                            
                        
                                        <?php 
                                }       
                            }
                            ?>

            </div>
    </body>
</html>
<?php

}else{

header("Location: loginForm.php");

exit();

}