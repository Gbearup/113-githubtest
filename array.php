<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>陣列</title>
</head>
<body>

<h2>陣列宣告</h2>


<style>
/* 在這裡添加你的 CSS 樣式 */
</style>

<?php
$head = ['', '國文', '英文', '數學', '地理', '歷史'];
$judy = ['judy', 95, 67, 70, 90, 87];
$amo = ['amo', 88, 78, 57, 81, 71];
$john = ['john', 45, 60, 68, 70, 62];
$peter = ['peter', 59, 32, 77, 54, 42];
$hebe = ['hebe', 71, 62, 80, 62, 64]; 
$students = [$judy, $amo, $john, $peter, $hebe];
?>

<table border="1">
<tr>
<?php
foreach ($head as $value) {
    echo "<th>$value</th>";
}
echo "</tr>";

foreach ($students as $student) {
    echo "<tr>";
    foreach ($student as $score) {
        echo "<td>{$score}</td>";
    }
    echo "</tr>";
}
?>
</table>


</body>
</html>


