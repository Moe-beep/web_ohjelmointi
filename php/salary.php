<?php
$hourlywage = $_POST["hourly wage"] ?? 0;
$hourlyrate = $_POST["hourly rate"] ?? 0;
$totalwage = $hourlywage * $hourlyrate;
echo "Total wage: " . $totalwage;
?>