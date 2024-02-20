<?php
$num_rows = 15;
$num_cells = 5;
$table_html = '<table border="1">';

for ($i = 1; $i <= $num_rows; $i++) {
    $table_html .= '<tr>';


    for ($j = 1; $j <= $num_cells; $j++) {
        $table_html .= '<td>Row ' . $i . ' Cell ' . $j . '</td>';
    }

    $table_html .= '</tr>';
}

$table_html .= '</table>';

echo '<!DOCTYPE html>
<html>
<head>
    <title>Assignment 2 - Exercise 3</title>
</head>
<body>';

echo $table_html;

echo '</body>
</html>';
?>
