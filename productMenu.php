<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if($_SESSION['name'] == "admin"){

        // collect value of input field
        $sel = $_REQUEST['userSel'];

        if($sel == "logout")
        {
            header("Location: logout.php");
        }
        else if($sel == "Dashbord") {
                header("Location: adminDashbord.php");
            }
            else if($sel == "Query") {
                header("Location: adminQuerys.php");
            }
    
    } else { 

        // collect value of input field
        $sel = $_REQUEST['userSel'];

        if($sel == "logout")
        {
            header("Location: logout.php");
        }
        else if($sel == "Dashbord") {
                header("Location: userDashbord.php");
            }
            else if($sel == "Query") {
                header("Location: Querys.php");
            }
    }
}

