<?php
$hourlySalary = $_POST["hourlySalary"] ?? 0;
$numberOfHours = $_POST["numberOfHours"] ?? 0;

$weekendAllowance = $_POST["weekendAllowance"] ?? 0;
$numberOfWeekends = $_POST["numberOfWeekends"] ?? 0;

$totalWeekendAllowance = $weekendAllowance * $numberOfWeekends;

$totalSalary = $hourlySalary * $numberOfHours;
$totalSalaryPlus =  $totalSalary + $totalWeekendAllowance;

echo "TotalSalary without weekend bonuses : " . $totalSalary;
echo "Total Salary with weekend bonouses : " . $totalSalaryPlus;
?>