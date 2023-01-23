<?php
include "AdminPanelPage.php";
include "config.php";

if (!empty($_GET['ids'])) {
    $cid = $_GET['ids'];
    
    $sql_statement = "SELECT * FROM coaches WHERE cid = $cid";
    $result = mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $coach_name = $row['cname']; 
    }

    echo "Coach $coach_name deleted from the table succesfully." ; 

    $sql_statement =
        "DELETE FROM coaches WHERE cid = $cid";
    $result = mysqli_query($db, $sql_statement);
}
?>