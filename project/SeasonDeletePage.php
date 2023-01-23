<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE SEASON</title>

    <style>
        .container {
            text-align: center;
        }
    </style>

</head>

<body>
    <?php include "AdminPanelPage.php" ?>

    <div class="container">
        <h3>Select the season to be deleted:</h3>
        <form action="seasonDelete.php" method="GET">
            <select name="ids">
                <?php
                    $sql_command = "SELECT sid, startd, endd FROM seasons";
                    $myresult = mysqli_query($db, $sql_command);
                    while ($id_rows = mysqli_fetch_assoc($myresult)) {
                        $sid = $id_rows['sid'];
                        $startd = $id_rows['startd'];
                        $endd = $id_rows['endd'];
                        echo "<option value=$sid>" . $sid . " -- " . $startd . " | " . $endd ."</option>";
                    }
                ?>
            </select>
            <button>DELETE</button>
        </form>
    </div>

</body>

</html>