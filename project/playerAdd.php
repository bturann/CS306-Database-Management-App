<?php 

include "AdminPanelPage.php";

include "config.php"; 

if (!empty($_POST['name'])){ 
    $pname = $_POST['name']; 
    $pnumber = $_POST['number']; 
    $pposition = $_POST['position'];
    $country_id = $_POST['country_id']; 
    $sql_statement = "INSERT INTO players(pname, pnumber, pposition, country_id) VALUES ('$pname',$pnumber,'$pposition',$country_id)";
    
    $result = mysqli_query($db, $sql_statement);

    $sql_statement = "SELECT P.pid FROM players P WHERE P.pname = '$pname'";
    $result = mysqli_query($db, $sql_statement);
    $data = mysqli_fetch_assoc($result);
    $pid = $data['pid'];

    $team_id = $_POST['team_id'];
    $sql_statement = "INSERT INTO playing_in(pid, tid) VALUES ('$pid','$team_id')";
    
    $result = mysqli_query($db, $sql_statement);


    
    if ($result) {
        echo "$pname with id ($pid) added to the database successfully!";
    }

} 
else 
{
    echo "You did not enter your name.";
}

?>
