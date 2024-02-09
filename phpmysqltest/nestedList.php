<!DOCTYPE html>
<html>
<body>
<ul style="list-style-type:circle;">

<head>
    <title>Assignment 2 - Exercise 1</title>
</head>

<?php
  for ($i = 1; $i < 5; $i++){
    echo "<li style='list-style-type:disc;'>";
    echo $i . "<br>";
    echo "<ul>";

    for ($j = 1; $j < 6; $j++){
      echo "<li>&nbsp;&nbsp;&nbsp;&nbsp;" . $j . "<br></li>";
    }

    echo "</ul>";
    
  }
    
?>
</li>
</ul>

</body>
</html>