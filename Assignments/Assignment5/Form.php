<?php 
include 'Directories.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['directoryName']) && isset($_POST['fileContent'])) {
        $directoryName = $_POST['directoryName'];
        $fileContent = $_POST['fileContent'];
        $directories = new Directories();

        $result = $directories->createDirectoryAndFile($directoryName, $fileContent);
    } else {
        $result = "Directory name AND file content required, try again.";
    }
}

if(isset($result)): ?>
    <p><?php echo $result; ?></p>
<?php endif; ?>

<?php echo "<h1>File and Directory Assignment</h1>
<p>Enter a folder name and the contents of a file. Folder names should contain alphanumeric characters only.</p>"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File and Directory Assignment</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="directoryName">Directory Name:</label><br>
    <input type="text" id="directoryName" name="directoryName"><br><br>
    
    <label for="fileContent">File Content:</label><br>
    <textarea id="fileContent" name="fileContent" rows="4" cols="50"></textarea><br><br>
    
    <input type="submit" value="Submit">
</form>

<?php if(isset($result) && strpos($result, 'Failed') === false): ?>
    <a href="<?php echo $result; ?>">File location</a>
<?php endif; ?>

</body>
</html>
