<?php
include "AdminPanelPage.php";
include "config.php";

if (!empty($_GET['ids'])) {
    $rid = $_GET['ids'];
    
    $sql_statement = "SELECT * FROM referee WHERE rid = $rid";
    $result = mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $referee_name = $row['rname']; 
    }

    echo "Referee $referee_name deleted from the table succesfully." ; 

    $sql_statement =
        "DELETE FROM referee WHERE rid = $rid";
    $result = mysqli_query($db, $sql_statement);
}
?>