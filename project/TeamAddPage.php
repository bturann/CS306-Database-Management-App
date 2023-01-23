<?php include "config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD TEAM</title>
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
            <h2>Team Submission Form</h2>
        </div>
        <form action="teamAdd.php" method="POST">

            <label for="tname">Team Name: </label><br>
            <input type="text" name="tname" id="tname" required /> <br> <br>

            <label for="rank">Rank: </label> <br>
            <input type="number" name="rank" id="rank" required /> <br> <br>

            <label for="point">Point: </label> <br>
            <input type="number" name="point" id="point" required /> <br> <br>

            <?php
            $sql_statement = "SELECT * FROM leagues";
            $query = mysqli_query($db, $sql_statement);
            $rowcount = mysqli_num_rows($query);
            ?>

            <label for="league_id">League: </label> <br>
            <select name="league_id" id="league_id"  required>
                <?php 
                    for($i=1; $i<=$rowcount; $i++)
                    {
                    $row = mysqli_fetch_array($query);
                    
                ?>
            <option id="league_id" value="<?php echo $row['lid'] ?>"><?php echo $row['lname'] ?></option> 
            <?php
                    }
            ?>

            </select> <br> <br>

            <button>SUBMIT</button>

        </form>
    </div>
</body>

</html>