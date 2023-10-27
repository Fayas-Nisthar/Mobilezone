<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])){

    include_once 'dbConnect.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        function input_data($data) {  
            $data = trim($data);  
            $data = stripslashes($data);  
            $data = htmlspecialchars($data);
            return $data;
        }

        $brand = input_data($_REQUEST['brand']);
        $mobileModel = input_data($_REQUEST['mobileModel']);
        $storage = input_data($_REQUEST['storage']);
        $ram = input_data($_REQUEST['ram']);
        $year = input_data($_REQUEST['year']);
        $price = input_data($_REQUEST['price']);
        $location = input_data($_REQUEST['location']);
        $ownership = input_data($_REQUEST['ownership']);
        $description = input_data($_REQUEST['description']);
        $condition = input_data($_REQUEST['condition']);
        $imageName = $_FILES["image"]["name"];
        $tmp_img_name = $_FILES['image']['tmp_name'];
        $folder = 'upload/';
        $userID = $_SESSION['id'];
        move_uploaded_file($tmp_img_name,$folder.$imageName);
        $imagePath = input_data($folder.$imageName);

        $sql = "INSERT INTO mobiles (`brand`, `mobileModel`, `storage`, `ram`, `year`, `condition`, `price`, `location`, `ownership`, `description`, `imageLocation`,`userID`) VALUES ('$brand','$mobileModel','$storage','$ram','$year','$condition','$price','$location','$ownership','$description','$imagePath','$userID')";

        if($conn->query($sql) === TRUE) {
            header("Location: userAds.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

} else {
    header("Location: loginForm.php");
}