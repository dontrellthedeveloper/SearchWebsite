<?php
include("../config.php");

if(isset($_POST["imageUrl"])) {
    $query = $con->prepare("UPDATE Images SET click = click + 1 WHERE imageUrl=:imageUrl");
    $query->bindParam(":imageUrl", $_POST["imageUrl"]);

    $query->execute();
}
else {
    echo "No image URL passed to page";
}
?>