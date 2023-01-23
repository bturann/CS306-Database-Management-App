<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY PLAYERS</title>

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
    <?php include "Navbar.php" ?>

    <div class="container">
        <table>

            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Player Number </th>
                <th> Player Position </th>
                <th> Country ID </th>
            </tr>

            <?php
        $sql_statement = "SELECT * FROM players";

        $result = mysqli_query($db, $sql_statement); // Executing query
        
        while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $player_id = $row['pid'];
            $player_name = $row['pname'];
            $player_number = $row['pnumber'];
            $player_position = $row['pposition'];
            $player_country = $row['country_id'];

            echo "<tr>" . "<th>" . $player_id . "</th>" . "<th>" . $player_name . "</th>" . "<th>" . $player_number . "</th>" .  "<th>" . $player_position . "</th>" . "<th>" . $player_country . "</th>" . "</tr>";
        }
        ?>

    </div>

</body>

</html>