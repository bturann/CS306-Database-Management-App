<?php 

include "AdminPanelPage.php";

include "config.php"; 

if (!empty($_POST['lname'])){ 
    $lname = $_POST['lname']; 
    $sql_statement = "INSERT INTO leagues(lname) VALUES ('$lname')";
    
    $result = mysqli_query($db, $sql_statement);

    $sql_statement = "SELECT L.lid FROM leagues L WHERE L.lname = '$lname'";
    $result = mysqli_query($db, $sql_statement);
    $data = mysqli_fetch_assoc($result);
    $lid = $data['lid'];

    $season_id = $_POST['season_id'];
    $sql_statement = "INSERT INTO including(lid, sid) VALUES ('$lid','$season_id')";
    
    $result = mysqli_query($db, $sql_statement);


    
    if ($result) {
        echo "$lname with id ($lid) added to the database successfully!";
    }

} 
else 
{
    echo "You did not enter your name.";
}

?>
