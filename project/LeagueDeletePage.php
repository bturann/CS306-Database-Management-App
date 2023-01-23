<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE LEAGUE</title>

    <style>
        .container {
            text-align: center;
        }
    </style>

</head>

<body>
    <?php include "AdminPanelPage.php" ?>

    <div class="container">
        <h3>Select the league to be deleted:</h3>
        <form action="leagueDelete.php" method="GET">
            <select name="ids">
                <?php
                    $sql_command = "SELECT lid, lname FROM leagues";
                    $myresult = mysqli_query($db, $sql_command);
                    while ($id_rows = mysqli_fetch_assoc($myresult)) {
                        $lid = $id_rows['lid'];
                        $lname = $id_rows['lname'];
                        echo "<option value=$lid>" . $lname . "</option>";
                    }
                ?>
            </select>
            <button>DELETE</button>
        </form>
    </div>

</body>

</html>