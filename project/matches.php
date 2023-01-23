<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4MatchPage.css">

    <title>Matches</title>

</head>

<body>
    <?php include "Navbar.php" ?>


    <div class="container">

        
        <table align="center">

            <tr>
                <th> ID </th>
                <th> Home Team </th>
                <th> Home Team Score </th>
                <th> Away Team Score </th>
                <th> Away Team </th>
                <th> Referee Name </th>
            </tr>

        <?php

        $sql_statement = "SELECT M.rid, M.mid, T1.tname as homeTeamName, M.home_score, M.away_score, T2.tname as awayTeamName FROM matches M, teams T1, teams T2 WHERE M.hometeamid = T1.tid and M.awayteamid = T2.tid";

        $result = mysqli_query($db, $sql_statement); // Executing query
        
        while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $match_id = $row['mid'];
            $referee_id = $row['rid'];
            $home_team_name = $row['homeTeamName'];
            $away_team_name = $row['awayTeamName'];
            $home_team_score = $row['home_score'];
            $away_team_score = $row['away_score'];


            $sql_statement_referee = "SELECT * FROM referee R WHERE R.rid = $referee_id";
            $result_referee = mysqli_query($db, $sql_statement_referee); // Executing query

            if($row_referee = mysqli_fetch_assoc($result_referee)){
                $referee_name = $row_referee['rname'];
                echo "<tr>" . "<td>" . $match_id . "</td>" . "<td>" . $home_team_name . "</td>" . "<td>" . $home_team_score . "</td>" . "<td>" . $away_team_score . "</td>". "<td>" . $away_team_name . "</td>" ."<td>" . $referee_name . "</td>" . "</tr>";

            }
            /*
            $sql_statement_given = "SELECT * FROM penalties P WHERE P.rid = $referee_id";
            
            $result_given = mysqli_query($db, $sql_statement_given); // Executing query
            $count = 0;
            while($row_given = mysqli_fetch_assoc($result_given)){
                $last_penalty_id = $row_given['penalty_id'];
                $count++;
            }
            $sql_statement_matches = "SELECT M.rid, M.mid, M.home_score, M.away_score, T1.tname as homeTeamName, T2.tname as awayTeamName FROM matches M, teams T1, teams T2 WHERE M.rid = $referee_id and M.hometeamid = T1.tid and M.awayteamid = T2.tid";

            $count_match = 0;
            $last_match_home = "";
            $result_match = mysqli_query($db, $sql_statement_matches); // Executing query
            while($row_match = mysqli_fetch_assoc($result_match)){
                $last_match_home = $row_match['homeTeamName'];
                $last_match_away = $row_match['awayTeamName'];
                $last_match_home_score = $row_match['home_score'];
                $last_match_away_score = $row_match['away_score'];
                $count_match++;
            }

            echo "<tr>" . "<th>" . $referee_id . "</th>" . "<th>" . $referee_name . "</th>" . "<th>" . $count . "</th>" . "<th>" . $count_match . "</th>";
            if ($last_match_home != ""){
                echo "<th>" . $last_match_home . " " . $last_match_home_score ." - ". $last_match_away_score ." ". $last_match_away . "</tr>";
            }
            else{
                echo "</tr>";
            }*/
        }
        ?>

    </div>

</body>

</html>