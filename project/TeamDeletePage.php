<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE TEAM</title>

    <style>
        .container {
            text-align: center;
        }
    </style>

</head>

<body>
    <?php include "AdminPanelPage.php" ?>

    <div class="container">
        <h3>Select the team to be deleted:</h3>
        <form action="teamDelete.php" method="GET">
            <select name="ids">
                <?php
                    $sql_command = "SELECT tid, tname FROM teams";
                    $myresult = mysqli_query($db, $sql_command);
                    while ($id_rows = mysqli_fetch_assoc($myresult)) {
                        $tid = $id_rows['tid'];
                        $tname = $id_rows['tname'];
                        echo "<option value=$tid>" . $tname . "</option>";
                    }
                ?>
            </select>
            <button>DELETE</button>
        </form>
    </div>

</body>

</html>