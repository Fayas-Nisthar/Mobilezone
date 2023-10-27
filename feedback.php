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
    // collect value of input field
    $feedback = input_data($_REQUEST['feedback']);
    $userID = $_SESSION['id'];
    $sql = "INSERT INTO feedbacks (`feedback`,`userID`) VALUES ('$feedback','$userID')";
  
    if($conn->query($sql) === TRUE) {
        header("Location: userDashbord.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}