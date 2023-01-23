<?php
include "config.php";
include "Navbar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <div class="patterns">
        <svg width="100%" height="100%">
            <text x="50%" y="70%" text-anchor="middle"  >
                 Welcome to KickOFF!
            </text>
        </svg>
    </div>
    <div class="container">
        <table align="center" >
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> Surname </th>
            </tr>

            <?php
            echo "<tr>" . "<td>" . "27907" . "</td>" . "<td>" . "Ali Özgün" . "</td>" . "<td>" . "Akyüz" . "</td>" . "</tr>";
            echo "<tr>" . "<td>" . "28132" . "</td>" . "<td>" . "Berkay Barış" . "</td>" . "<td>" . "Turan" . "</td>" . "</tr>";
            echo "<tr>" . "<td>" . "28479" . "</td>" . "<td>" . "Sermet" . "</td>" . "<td>" . "Özgü" . "</td>" . "</tr>";
        ?>
    </div>
</body>
</html>