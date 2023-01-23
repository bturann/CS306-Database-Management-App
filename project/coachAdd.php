<?php 

include "AdminPanelPage.php";

include "config.php"; 

if (!empty($_POST['name'])){ 
    $cname = $_POST['name']; 
    $country_id = $_POST['country_id']; 
    $sql_statement = "INSERT INTO coaches(cname, country_id) VALUES ('$cname',$country_id)";
    
    $result = mysqli_query($db, $sql_statement);

    $sql_statement = "SELECT C.cid FROM coaches C WHERE C.cname = '$cname'";
    $result = mysqli_query($db, $sql_statement);
    $data = mysqli_fetch_assoc($result);
    $cid = $data['cid'];

    $team_id = $_POST['team_id'];
    $sql_statement = "INSERT INTO managing(cid, tid) VALUES ('$cid','$team_id')";
    
    $result = mysqli_query($db, $sql_statement);


    
    if ($result) {
        echo "$cname with id ($cid) added to the database successfully!";
    }

} 
else 
{
    echo "You did not enter your name.";
}

?>
