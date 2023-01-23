<?php
include "AdminPanelPage.php";
include "config.php";

if (!empty($_GET['ids'])) {
    $mid = $_GET['ids'];
    
    $sql_statement = "DELETE FROM matches WHERE mid = $mid";
    $result = mysqli_query($db, $sql_statement);

    echo "Match deleted from the table succesfully." ; 

}
?>