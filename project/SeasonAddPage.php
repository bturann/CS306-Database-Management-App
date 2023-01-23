<?php include "config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD SEASON</title>
</head>

<style>
    .container {
        text-align: center;
    }
</style>

<body background-color="61A7A9">
    <?php include "AdminPanelPage.php" ?>

    <div class="container">
        <div>
            <h2>Season Submission Form</h2>
        </div>
        <form action="seasonAdd.php" method="POST">

            <label for="startd">Start Date: </label><br>
            <input type="date" name="startd" id="startd" required /> <br> <br>

            <label for="endd">End Date: </label><br>
            <input type="date" name="endd" id="endd" required /> <br> <br>

            <button>SUBMIT</button>

        </form>
    </div>
</body>

</html>