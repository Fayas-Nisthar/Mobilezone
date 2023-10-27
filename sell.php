<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

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

            <section class="container">
                <div class="row">

                        <div class="col-sm-6 mx-auto">
                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sell your mobile</p>
                        <form class="mx-1 mx-sm-4" method="POST" action="mobileUpload.php" enctype="multipart/form-data">
                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">
                                    <datalist id="brand">
                                        <option value="Apple">
                                        <option value="Samsung">
                                        <option value="Redmi">
                                        <option value="Realme">
                                        <option value="Oppo">
                                        <option value="Lenovo">
                                        <option value="Vivo">
                                    </datalist> 
                                    <input list="brand" class="form-control" name="brand" required>
                                    <label for="brand" class="form-label">Brand Name</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="mobileModel" id="mobileModel" type="text" required>
                                    <label class="form-label" for="mobileModel">Mobile Model Name</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="storage" id="storage" list="storageTypes" required>
                                    <datalist id="storageTypes">
                                        <option value="16 GB">16 GB</option>
                                        <option value="32 GB">32 GB</option>
                                        <option value="64 GB">64 GB</option>
                                        <option value="128 GB">128 GB</option>
                                        <option value="256 GB">256 GB</option>
                                        <option value="512 GB">512 GB</option>
                                        <option value="1 TB">1 TB</option>
                                    </datalist>
                                    <label class="form-label" for="storage">Storage</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="ram" id="ram" list="ramTypes" required>
                                    <datalist id="ramTypes">
                                        <option value="2 gb">2 gb</option>
                                        <option value="3 gb">3 gb</option>
                                        <option value="4 gb">4 gb</option>
                                        <option value="6 gb">6 gb</option>
                                        <option value="8 gb">8 gb</option>
                                        <option value="12 gb">12 gb</option>
                                    </datalist>
                                    <label class="form-label" for="ram">RAM</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="year" id="year" type="date">
                                    <label class="form-label" for="year">Purchased Date</label>
                                </div>
                            </div>

                            

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="condition" id="condition" list="conditionTypes">
                                    <datalist id="conditionTypes">
                                        <option value="New">New</option>
                                        <option value="Used - Like New">Used - Like New</option>
                                        <option value="Used - Good">Used - Good</option>
                                        <option value="Used - Fair">Used - Fair</option>
                                    </datalist>
                                    <label class="form-label" for="condition">Condition</label>
                                </div>
                            </div>
                            
                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="price" id="prize" type="number" required>
                                    <label class="form-label" for="price">Asking Price</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">  
                                    <input class="form-control" name="location" id="location" type="text">
                                    <label class="form-label" for="location">Curent Location</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">         
                                <input class="form-control" list="ownership" name="ownership">
                                <label class="form-label" for="ownership">Ownership Details</label>
                                <datalist id="ownership">
                                    <option value="First Hand">
                                    <option value="Second Hand">
                                    <option value="Others">
                                </datalist>    
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0">
                                <textarea id="description" class="form-control" name="description" rows="5" cols="30"></textarea>
                                <label class="form-label" for="description" class="form-label">Description</label>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <div class="form-outline flex-fill mb-0"> 
                                    <input class="form-control" type="file" name='image' required> 
                                    <label class="form-label" for="image">UploadImage</label>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button class="btn btn-primary btn-lg" name="submit" type="submit">Submit</button>
                            </div>  
                                          
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>
<?php

}else{

header("Location: loginForm.php");

exit();

}

?>