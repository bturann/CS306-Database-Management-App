<?php include "config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD PENALTIES</title>
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
            <h2> Penalty Submission Form</h2>
        </div>
        <form action="penaltyAdd.php" method="POST">

            <?php
            $sql_statement = "SELECT * FROM matches";
            $query = mysqli_query($db, $sql_statement);
            $rowcount = mysqli_num_rows($query);
            ?>

            <label for="match_id">Match: </label> <br>
            <select name="match_id" id="match_id"  required>
                <?php 
                    for($i=1; $i<=$rowcount; $i++)
                    {
                    $row = mysqli_fetch_array($query);
                    
                ?>
            <option id="match_id" value="<?php echo $row['mid'] ?>"><?php echo $row['mdate'], " | ", $row['hometeamid'], " - ", $row['awayteamid'] ?></option> 
            <?php
                    }
            ?>

            </select> <br> <br>

            <?php
            $sql_statement = "SELECT * FROM referee";
            $query = mysqli_query($db, $sql_statement);
            $rowcount = mysqli_num_rows($query);
            ?>

            <label for="referee_id">Referee: </label> <br>
            <select name="referee_id" id="referee_id"  required>
                <?php 
                    for($i=1; $i<=$rowcount; $i++)
                    {
                    $row = mysqli_fetch_array($query);
                    
                ?>
            <option id="referee_id" value="<?php echo $row['rid'] ?>"><?php echo $row['rname'] ?></option> 
            <?php
                    }
            ?>

            </select> <br> <br>

            <?php
            $sql_statement = "SELECT * FROM players";
            $query = mysqli_query($db, $sql_statement);
            $rowcount = mysqli_num_rows($query);
            ?>

            <label for="pid">Player Name: </label> <br>
            <select name="pid" id="pid"  required>
                <?php 
                    for($i=1; $i<=$rowcount; $i++)
                    {
                    $row = mysqli_fetch_array($query);
                    
                ?>
            <option id="pid" value="<?php echo $row['pid'] ?>"><?php echo $row['pname'] ?></option> 
            <?php
                    }
            ?>

            </select> <br> <br>


            <label for="type">Type of Penalty: </label> <br>
            <input type="text" name="type" id="type" required /> <br> <br>

            <label for="p_time">Time of Penalty: </label> <br>
            <input type="text" name="p_time" id="p_time" required /> <br> <br>

            <button>SUBMIT</button>

        </form>
    </div>
</body>

</html>