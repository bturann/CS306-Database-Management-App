<?php
include "AdminPanelPage.php";
include "config.php";

if (!empty($_GET['ids'])) {
    $sid = $_GET['ids'];
    
    $sql_statement = "SELECT * FROM seasons WHERE sid = $sid";
    $result = mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $startd = $row['startd'];
        $endd = $row['endd']; 
    }

    echo "Season ($startd | $endd) deleted from the table succesfully." ; 

    $sql_statement =
        "DELETE FROM seasons WHERE sid = $sid";
    $result = mysqli_query($db, $sql_statement);
}
?>