<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Coaches</title>
</head>

<body>
    <?php include "Navbar.php" ?>

    <div class="container">
        <table align="center">
            <tr>
                <th> Team Name </th>
                <th> Coach Name </th>
                <th> Country </th>
            </tr>

            <?php
        $sql_statement = "SELECT c.cname, c.country_id, t.tname, m.tid, m.cid
                          FROM teams t, coaches c , managing m
                          WHERE t.tid = m.tid
                          AND m.cid = c.cid";

        $result = mysqli_query($db, $sql_statement); // Executing query
        
        while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $team_name = $row['tname'];
            $coach_name = $row['cname'];
            $country_id = $row['country_id'];
            

            echo "<tr>" . "<td>" . $team_name . "</td>" . "<td>" . $coach_name . "</td>" . "<td>" . $country_id . "</td>" ."</tr>";
        }
        ?>

    </div>

</body>

</html>