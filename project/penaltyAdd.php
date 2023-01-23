<?php 

include "AdminPanelPage.php";

include "config.php"; 

if (!empty($_POST['match_id'])){ 
    $match_id = $_POST['match_id']; 
    $referee_id = $_POST['referee_id']; 
    $pid = $_POST['pid'];
    $type = $_POST['type']; 
    $p_time = $_POST['p_time']; 
    $sql_statement = "INSERT INTO penalties(mid, rid, pid, type, p_time) VALUES ($match_id,$referee_id,$pid,'$type', '$p_time')";
    
    $result = mysqli_query($db, $sql_statement);

    
    if ($result) {
        echo "Penalty added to the database successfully!";
    }

    else{
        echo "Cannot add it";
    }

} 
else 
{
    echo "You did not enter your name.";
}

?>
