<?php

include_once 'dbConnect.php';

session_start();

$_SESSION['phoneID'] = $_REQUEST['phoneID'];


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $phoneID = $_SESSION['phoneID'];
    $userID = $_SESSION['id'];

    $orderSql = "INSERT INTO orders (`phoneID`, `userID`) VALUES ('$phoneID','$userID');";

    if($conn->query($orderSql) === TRUE) {
        header("Location: userOrders.php");
    } else {
        echo "Error: " . $orderSql . "<br>" . $conn->error;
    }
}