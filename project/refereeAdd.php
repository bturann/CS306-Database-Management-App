<?php 

include "AdminPanelPage.php";

include "config.php"; 

if (!empty($_POST['name'])){ 
    $rname = $_POST['name']; 
    $sql_statement = "INSERT INTO referee(rname) VALUES ('$rname')";
    
    $result = mysqli_query($db, $sql_statement);

    if ($result) {
        echo "$rname added to the database successfully!";
    }

} 
else 
{
    echo "You did not enter your name.";
}

?>
