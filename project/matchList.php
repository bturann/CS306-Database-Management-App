<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY MATCHES</title>

    <style>
        .container {
            text-align: center;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>

<body>
    <?php include "AdminPanelPage.php" ?>

    <div class="container">
        <table>

            <tr>
                <th> ID </th>
                <th> mdate </th>
                <th> League </th>
                <th> Referee </th>
                <th> Home Team </th>
                <th> Home Score </th>
                <th> Away Score </th>
                <th> Away Team </th>
            </tr>

            <?php
        $sql_statement = "SELECT mid, mdate, rname, lname, home_score, away_score, T1.tname as hometeamname, T2.tname as awayteamname FROM matches M, teams T1, teams T2, leagues L, referee R 
        WHERE 
            T1.tid = M.hometeamid AND
            T2.tid = M.awayteamid AND
            L.lid = M.lid AND
            R.rid = M.rid";

        $result = mysqli_query($db, $sql_statement); // Executing query
        
        while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $match_id = $row['mid'];
            $mdate = $row['mdate'];
            $referee_name = $row['rname'];
            $league_name = $row['lname'];
            $home_score = $row['home_score'];
            $away_score = $row['away_score'];
            $home_team = $row['hometeamname'];
            $away_team = $row['awayteamname'];
            $referee_name = $row['rname'];

            echo "<tr>" . "<th>" . $match_id . "</th>" . "<th>" . $mdate . "</th>" . "<th>" . 
            $league_name . "</th>" ."<th>" . $referee_name . "</th>" ."<th>" . $home_team . "</th>" ."<th>" . 
            $home_score . "</th>" ."<th>" . $away_score . "</th>" ."<th>" . $away_team . "</th>" ."</tr>";
        }
        ?>

    </div>

</body>

</html>