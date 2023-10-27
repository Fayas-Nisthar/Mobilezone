<?php

include_once 'dbConnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

// collect value of input field
$del = $_REQUEST['cancel'];

$delSql = "DELETE FROM mobiles WHERE phoneID = ". $del .";";

if ($conn->query($delSql) === TRUE) {
    header("Location: userAds.php");
  } else {
    echo "Error deleting record: ".$conn->error;
  }
  $conn->close();
}