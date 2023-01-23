<?php include "config.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD MATCH</title>
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
            <h2> Match Submission Form</h2>
        </div>
        <form action="matchAdd.php" method="POST">

            <label for="matchd">Match Date: </label><br>
            <input type="date" name="matchd" id="matchd" required /> <br> <br>

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
            $sql_statement = "SELECT * FROM teams";
            $query = mysqli_query($db, $sql_statement);
            $rowcount = mysqli_num_rows($query);
            ?>

            <label for="home_team_id">Home Team: </label> <br>
            <select name="home_team_id" id="home_team_id"  required>
                <?php 
                    for($i=1; $i<=$rowcount; $i++)
                    {
                    $row = mysqli_fetch_array($query);
                    
                ?>
            <option id="home_team_id" value="<?php echo $row['tid'] ?>"><?php echo $row['tname'] ?></option> 
            <?php
                    }
            ?>

            </select> <br> <br>

            <?php
            $sql_statement = "SELECT * FROM teams";
            $query = mysqli_query($db, $sql_statement);
            $rowcount = mysqli_num_rows($query);
            ?>

            <label for="away_team_id">Away Team: </label> <br>
            <select name="away_team_id" id="away_team_id"  required>
                <?php 
                    for($i=1; $i<=$rowcount; $i++)
                    {
                    $row = mysqli_fetch_array($query);
                    
                ?>
            <option id="away_team_id" value="<?php echo $row['tid'] ?>"><?php echo $row['tname'] ?></option> 
            <?php
                    }
            ?>

            </select> <br> <br>

            <label for="home_score">Home Team Score: </label> <br>
            <input type="number" name="home_score" id="home_score" required /> <br> <br>

            <label for="away_score">Away Team Score: </label> <br>
            <input type="number" name="away_score" id="away_score" required /> <br> <br>

            <button>SUBMIT</button>

        </form>
    </div>
</body>

</html>