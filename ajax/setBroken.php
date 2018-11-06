<?php
include("../config.php");

if(isset($_POST["src"])) {
    $query = $con->prepare("UPDATE Images SET broken = 1 WHERE imageUrl=:src");
    $query->bindParam(":id", $_POST["src"]);

    $query->execute();
}
else {
    echo "No src passed to page";
}
?>