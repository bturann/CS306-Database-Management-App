<?php
include "AdminPanelPage.php";
include "config.php";

if (!empty($_GET['ids'])) {
    $tid = $_GET['ids'];
    
    $sql_statement = "SELECT * FROM teams WHERE tid = $tid";
    $result = mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $tname = $row['tname']; 
    }

    echo "Team $tname deleted from the table succesfully." ; 

    $sql_statement =
        "DELETE FROM teams WHERE tid = $tid";
    $result = mysqli_query($db, $sql_statement);
}
?>