<?php 

include "AdminPanelPage.php";

include "config.php"; 

if (!empty($_POST['matchd'])){ 
    $mdate = $_POST['matchd']; 
    $lid = $_POST['league_id']; 
    $rid = $_POST['referee_id'];
    $hometeamid = $_POST['home_team_id']; 
    $awayteamid = $_POST['away_team_id']; 
    $home_score = $_POST['home_score']; 
    $away_score = $_POST['away_score']; 
    $sql_statement = "INSERT INTO matches(mdate, lid, rid, hometeamid, awayteamid, home_score, away_score) VALUES ('$mdate',$lid,$rid,$hometeamid, $awayteamid, $home_score, $away_score)";
    
    $result = mysqli_query($db, $sql_statement);

    
    if ($result) {
        echo "Match added to the database successfully!";
    }

} 
else 
{
    echo "You did not enter your name.";
}

?>
