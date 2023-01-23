<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY LEAGUE</title>

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
                <th> Name </th>
            </tr>

            <?php
        $sql_statement = "SELECT * FROM leagues";

        $result = mysqli_query($db, $sql_statement); // Executing query
        
        while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $league_id = $row['lid'];
            $league_name = $row['lname'];
            echo "<tr>" . "<th>" . $league_id . "</th>" . "<th>" . $league_name . "</th>" . "</tr>";
        }
        ?>

    </div>

</body>

</html>