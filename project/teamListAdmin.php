<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Teams List</title>
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
        <table align="center">

            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Rank </th>
                <th> Point </th>
                <th> League </th>
            </tr>

            <?php
        $sql_statement = "SELECT * FROM teams T, within W, leagues L WHERE T.tid = W.tid AND L.lid = W.lid ";

        $result = mysqli_query($db, $sql_statement); // Executing query
        
        while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $tid = $row['tid'];
            $tname = $row['tname'];
            $rank = $row['rank'];
            $point = $row['point'];
            $lname = $row['lname'];

            echo "<tr>" . "<td>" . $tid . "</td>" . "<td>" . $tname . "</td>" . "<td>" . $rank . "</td>" .  "<td>" . $point . "</td>" . "<td>" . $lname . "</td>" . "</tr>";
        }
        ?>

    </div>

</body>

</html>