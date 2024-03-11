<?php
class Directories {
    public function createDirectoryAndFile($directoryName, $fileContent) {
        $baseDirectory = 'directories/';
        $directoryPath = $baseDirectory . $directoryName;

        // Check if directory already exists
        if (is_dir($directoryPath)) {
            return "A directory already exists with that name";
        }

        // Create the directory
        if (!mkdir($directoryPath, 0777, true)) {
            return "Failed to create directory";
        }

        // Create the file
        $filePath = $directoryPath . '/readme.txt';
        if (file_put_contents($filePath, $fileContent) === false) {
            // If file creation fails, remove the created directory
            rmdir($directoryPath);
            return "Failed to create file";
        }

        // Return the directory path
        return $filePath;
    }
}
?>
