<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE COACH</title>

    <style>
        .container {
            text-align: center;
        }
    </style>

</head>

<body>
    <?php include "AdminPanelPage.php" ?>

    <div class="container">
        <h3>Select the coach to be deleted:</h3>
        <form action="coachDelete.php" method="GET">
            <select name="ids">
                <?php
                    $sql_command = "SELECT cid, cname, country_id FROM coaches";
                    $myresult = mysqli_query($db, $sql_command);
                    while ($id_rows = mysqli_fetch_assoc($myresult)) {
                        $cid = $id_rows['cid'];
                        $cname = $id_rows['cname'];
                        
                        $country_id = $id_rows['country_id'];
                        echo "<option value=$cid>" . $cname . " - " . $country_id . "</option>";
                    }
                ?>
            </select>
            <button>DELETE</button>
        </form>
    </div>

</body>

</html>