<?php 

include "AdminPanelPage.php";

include "config.php"; 

if (!empty($_POST['tname'])){ 
    $tname = $_POST['tname']; 
    $rank = $_POST['rank']; 
    $point = $_POST['point'];
    $sql_statement = "INSERT INTO teams(tname, rank, point) VALUES ('$tname',$rank,'$point')";
    
    $result = mysqli_query($db, $sql_statement);

    $sql_statement = "SELECT T.tid FROM teams T WHERE T.tname = '$tname'";
    $result = mysqli_query($db, $sql_statement);
    $data = mysqli_fetch_assoc($result);
    $tid = $data['tid'];

    $league_id = $_POST['league_id'];
    $sql_statement = "INSERT INTO within(lid, tid) VALUES ('$league_id','$tid')";
    
    $result = mysqli_query($db, $sql_statement);


    
    if ($result) {
        echo "$tname with id ($tid) added to the database successfully!";
    }

} 
else 
{
    echo "You did not enter your name.";
}

?>
