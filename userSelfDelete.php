<?php

include_once 'dbConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// collect value of input field
$del = $_REQUEST['userID'];

$delSql = "DELETE FROM users WHERE userID = ". $del .";";

if ($conn->query($delSql) === TRUE) {
    header("Location: signup.php");
  } else {
    echo "Error deleting record: ".$conn->error;
  }
  $conn->close();
}