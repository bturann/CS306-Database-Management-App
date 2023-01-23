<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY REFEREE</title>

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
        $sql_statement = "SELECT * FROM referee";

        $result = mysqli_query($db, $sql_statement); // Executing query
        
        while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $referee_id = $row['rid'];
            $referee_name = $row['rname'];
            echo "<tr>" . "<th>" . $referee_id . "</th>" . "<th>" . $referee_name . "</th>" . "</tr>";
        }
        ?>

    </div>

</body>

</html>