<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE MATCH</title>

    <style>
        .container {
            text-align: center;
        }
    </style>

</head>

<body>
    <?php include "AdminPanelPage.php" ?>

    <div class="container">
        <h3>Select the match to be deleted:</h3>
        <form action="matchDelete.php" method="GET">
            <select name="ids">
                <?php
                    $sql_command = "SELECT mid, mdate, lid, rid, hometeamid, awayteamid, home_score, away_score FROM matches";
                    $myresult = mysqli_query($db, $sql_command);
                    while ($id_rows = mysqli_fetch_assoc($myresult)) {
                        $mid = $id_rows['mid'];
                        $mdate = $id_rows['mdate'];
                        $lid = $id_rows['lid'];
                        $rid = $id_rows['rid'];
                        $hometeamid = $id_rows['hometeamid'];
                        $awayteamid = $id_rows['awayteamid'];
                        $home_score = $id_rows['home_score'];
                        $away_score = $id_rows['away_score'];
                        echo "<option value=$mid>" . $mdate . " - " . $lid . " - " . $rid . " - " . $hometeamid . " - ". $awayteamid . " - " . $home_score . " - " . $away_score . "</option>";
                    }
                ?>
            </select>
            <button>DELETE</button>
        </form>
    </div>

</body>

</html>