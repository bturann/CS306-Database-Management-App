<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT PLAYER</title>

    <style>
        .container {
            text-align: center;
        }
    </style>

</head>

<body>
    <?php include "AdminPanelPage.php" ?>

    <div class="container">
        <h3>Select players with respect to their position:</h3>
        <form action="playerSelect.php" method="GET">
            <select name="position">
                <?php
                    $pos1 = "Forward"; $pos2 = "Midfield"; $pos3 = "Defense"; $pos4 = "Goalkeeper";

                    echo "<option value=$pos1>" . $pos1;
                    echo "<option value=$pos2>" . $pos2;
                    echo "<option value=$pos3>" . $pos3;
                    echo "<option value=$pos4>" . $pos4;
                ?>
            </select>
            <button>SHOW</button>
        </form>
    </div>

</body>

</html>