<?php
include "AdminPanelPage.php";
include "config.php";

if (!empty($_GET['ids'])) {
    $lid = $_GET['ids'];
    
    $sql_statement = "SELECT * FROM leagues WHERE lid = $lid";
    $result = mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $lname = $row['lname']; 
    }

    echo "League $lname deleted from the table succesfully." ; 

    $sql_statement =
        "DELETE FROM leagues WHERE lid = $lid";
    $result = mysqli_query($db, $sql_statement);
}
?>