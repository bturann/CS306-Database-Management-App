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

    <title>League</title>

</head>

<body>
    <?php include "Navbar.php" ?>

    <div class="container">
        <table align="center" >
            <tr>
                <th> League </th>
                <th> Season Start </th>
                <th> Season End </th>
            </tr>

            <?php
        $sql_statement = "SELECT i.sid, i.lid, l.lid, l.lname, s.sid, s.startd, s.endd
                          FROM including i, seasons s , leagues l
                          WHERE l.lid = i.lid
                          AND i.sid = s.sid";

        $result = mysqli_query($db, $sql_statement); // Executing query
        
        while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $league_name = $row['lname'];
            $season_start = $row['startd'];
            $season_end = $row['endd'];
            
            echo "<tr>" . "<td>" . $league_name . "</td>" . "<td>" . $season_start . "</td>" . "<td>" . $season_end . "</td>" . "</tr>";
        }
        ?>

    </div>

</body>

</html>