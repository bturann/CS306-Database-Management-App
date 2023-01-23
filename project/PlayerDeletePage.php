<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE PLAYER</title>

    <style>
        .container {
            text-align: center;
        }
    </style>

</head>

<body>
    <?php include "AdminPanelPage.php" ?>

    <div class="container">
        <h3>Select the player to be deleted:</h3>
        <form action="playerDelete.php" method="GET">
            <select name="ids">
                <?php
                    $sql_command = "SELECT pid, pname, pnumber, pposition, country_id FROM players";
                    $myresult = mysqli_query($db, $sql_command);
                    while ($id_rows = mysqli_fetch_assoc($myresult)) {
                        $pid = $id_rows['pid'];
                        $pname = $id_rows['pname'];
                        $pnumber = $id_rows['pnumber'];
                        $pposition = $id_rows['pposition'];
                        $country_id = $id_rows['country_id'];
                        echo "<option value=$pid>" . $pname . " - " . $pnumber . " - " . $pposition . " - " . $country_id . "</option>";
                    }
                ?>
            </select>
            <button>DELETE</button>
        </form>
    </div>

</body>

</html>