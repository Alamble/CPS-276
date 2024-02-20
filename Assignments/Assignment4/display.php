<?php
require_once 'AddNames.php';

$exploder = new Exploder();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_name']) && !empty($_POST['full_name'])) {
        $exploder->addName($_POST['full_name']);
    } elseif (isset($_POST['clear_names'])) {
        $exploder->clearNames();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Names</title>
    <h1>Add Names</h1>
</head>
<body>
    <form method="post">
        <label for="full_name">Enter Full Name:</label>
        <input type="text" id="full_name" name="full_name">
        <input type="submit" name="add_name" value="Add Name">
        <input type="submit" name="clear_names" value="Clear Names">
    </form>
    <textarea rows="10" cols="50">
        <?php echo $exploder->getFormattedNames(); ?></textarea>
</body>
</html>