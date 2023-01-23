<?php 

include "AdminPanelPage.php";

include "config.php"; 

if (!empty($_POST['startd'])){ 
    $startd = $_POST['startd']; 
    $endd = $_POST['endd'];

    $sql_statement = "INSERT INTO seasons(startd, endd) VALUES ('$startd', '$endd')";
    
    $result = mysqli_query($db, $sql_statement);

    if ($result) {
        echo "Season ($startd | $endd) added to the database successfully!";
    }

} 
else 
{
    echo "You did not enter your name.";
}

?>
