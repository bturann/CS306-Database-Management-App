<?php include "config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD LEAGUE</title>
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
            <h2>League Submission Form</h2>
        </div>
        <form action="leagueAdd.php" method="POST">

            <label for="lname">League Name: </label><br>
            <input type="lname" name="lname" id="lname" required /> <br> <br>


            <?php
            $sql_statement = "SELECT * FROM seasons";
            $query = mysqli_query($db, $sql_statement);
            $rowcount = mysqli_num_rows($query);
            ?>

            <label for="season_id">Season: </label> <br>
            <select name="season_id" id="season_id"  required> <br> <br>
                <?php 
                    for($i=1; $i<=$rowcount; $i++)
                    {
                    $row = mysqli_fetch_array($query);
                    
                ?>
            <option id="season_id" value="<?php echo $row['sid'] ?>"><?php echo $row['startd'], " | ", $row['endd'] ?></option> 
            <?php
                    }
            ?>

            </select> <br> <br>

            <button>SUBMIT</button>

        </form>
    </div>
</body>

</html>