<?php

    if(!isset($_POST["image"])){
        die("Post was empty.");
    }

    $sql="insert into drawings(image) values(:image)";

    // INSERT with named parameters
    $conn = new PDO('mysql:host=localhost;dbname=drawingDB', "root", "");
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":image",$_POST["image"]);
    $stmt->execute();
    $affected_rows = $stmt->rowCount();
    echo $affected_rows;

?>
