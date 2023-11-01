<?php

$file = 'textfile/task-2.txt'; 
$data = 'Hello! Shahed. Welcome to PHP WORLD! New data is inserting into a text file for task-2';

// Open the file in append mode
$handle = fopen($file, 'a');

if ($handle) {
    // Write the data to the file
    fwrite($handle, $data . PHP_EOL); // PHP_EOL is used to add a newline after the new data

    // Close the file
    fclose($handle);

    echo "Hello! Shahed. Data appended successfully.";
} else {
    echo "Failed to open the file for appending.";
}

?>
