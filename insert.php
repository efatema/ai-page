<?php
 $conn = mysqli_connect("localhost", "root", "", "online");
 if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    $NAME = $_POST["name"];
    $IN = $_POST["date"];
    $OUT = $_POST["date2"];
    $NUMP = $_POST["num"];
    $NUM = $_POST["cnum"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $sql = "INSERT INTO admission VALUES ('','$name', '$date', '$date2', '$num', '$cnum', '$email', '$comment')";
    if (mysqli_query($conn, $sql)) {
        echo "<h2>Data stored in the database successfully.</h2>";
        echo "<p>Please browse your localhost phpMyAdmin to view the updated data.</p>";
    } else {
        echo "ERROR: Oops! Something went wrong. " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>