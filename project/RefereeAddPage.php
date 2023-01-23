<?php include "config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD REFEREE</title>
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
            <h2>Referee Submission Form</h2>
        </div>
        <form action="refereeAdd.php" method="POST">

            <label for="name">Name: </label><br>
            <input type="text" name="name" id="name" required /> <br> <br>

            <button>SUBMIT</button>

        </form>
    </div>
</body>

</html>