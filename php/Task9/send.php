<?php
$name = $_POST["name"];
$city = $_POST["city"];
$problem = $_POST["problem"];
$description = $_POST["description"];

// Change this to your email
$ok = mail("moe.naing@vuoksi.fi",
           "Problem Report from Website",
           "Name: $name\nCity: $city\nProblem: $problem\nDescription: $description");

if ($ok) {
    header("Location: thank.php");
} else {
    header("Location: problem.php");
}
?>