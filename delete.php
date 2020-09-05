<?php
    require_once ('db_config.php');
$sql = "DELETE FROM userdata where id=".$_GET["id"];

//execute the querry

    if (mysqli_query($conn,$sql))
        header("refresh:1; url=user_list.php");
        // echo "deleted successfully";
        else
        echo "not deleted";

?>