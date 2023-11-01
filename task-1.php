<?php

$file = 'textfile/task-1.txt'; 

// Checking if the file exists
if (file_exists($file)) {
    // Open the file
    $fileContent = file_get_contents($file);

    // Displaying the content
    echo $fileContent;
} else {
    echo "File not found";
}

?>
