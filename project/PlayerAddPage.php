<?php include "config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PLAYER</title>
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
            <h2>Player Submission Form</h2>
        </div>
        <form action="playerAdd.php" method="POST">

            <label for="name">Name: </label><br>
            <input type="text" name="name" id="name" required /> <br> <br>

            <label for="number">Number: </label> <br>
            <input type="number" name="number" id="number" required /> <br> <br>

            <label for="position">Position: </label> <br>
            <input type="text" name="position" id="position" required /> <br> <br>

            <label for="country_id">Country ID: </label> <br>
            <input type="text" name="country_id" id="country_id" required /> <br> <br>

            <?php
            $sql_statement = "SELECT * FROM teams";
            $query = mysqli_query($db, $sql_statement);
            $rowcount = mysqli_num_rows($query);
            ?>

            <label for="team_id">Team: </label> <br>
            <select name="team_id" id="team_id"  required>
                <?php 
                    for($i=1; $i<=$rowcount; $i++)
                    {
                    $row = mysqli_fetch_array($query);
                    
                ?>
            <option id="team_id" value="<?php echo $row['tid'] ?>"><?php echo $row['tname'] ?></option> 
            <?php
                    }
            ?>

            </select> <br> <br>

            <button>SUBMIT</button>

        </form>
    </div>
</body>

</html>