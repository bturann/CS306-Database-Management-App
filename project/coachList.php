<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY COACH</title>

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
                <th> Team Managing</th>
                <th> Country ID </th>
            </tr>

            <?php
        $sql_statement = "SELECT * FROM coaches C, teams T WHERE C.cid = T.tid";

        $result = mysqli_query($db, $sql_statement); // Executing query
        
        while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $cid = $row['cid'];
            $cname = $row['cname'];
            $country_id = $row['country_id'];
            $tname = $row['tname'];
            echo "<tr>" . "<th>" . $cid . "</th>" . "<th>" . $cname . "</th>" . "<th>" . $tname . "</th>" .  "<th>" . $country_id . "</th>" . "</tr>";
        }
        ?>

    </div>

</body>

</html>