<?php
include "AdminPanelPage.php";
include "config.php";

if (!empty($_GET['ids'])) {
    $pid = $_GET['ids'];
    
    $sql_statement = "SELECT * FROM players WHERE pid = $pid";
    $result = mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $player_name = $row['pname']; 
    }

    echo "Player $player_name deleted from the table succesfully." ; 

    $sql_statement =
        "DELETE FROM players WHERE pid = $pid";
    $result = mysqli_query($db, $sql_statement);
}
?>