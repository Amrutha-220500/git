<?php

$filename = "mode.txt";

echo "<h3>Mode: r (Read Only)</h3>";
if(file_exists($filename)){
    $file = fopen($filename, "r");
    echo fread($file, filesize($filename));
    fclose($file);
} else {
    echo "File does not exist for read mode.<br>";
}



echo "<h3>Mode: w (Write Only)</h3>";
$file = fopen($filename, "w");
fwrite($file, "This is written using w mode.<br>");
fclose($file);
echo "Data written using w mode (old data erased).<br>";



echo "<h3>Mode: a (Append)</h3>";
$file = fopen($filename, "a");
fwrite($file, "This line is appended.<br>");
fclose($file);
echo "Data appended successfully.<br>";



echo "<h3>Mode: x (Create New File)</h3>";
$newfile = "newfile.txt";
if(file_exists($newfile)){
    echo "File already exists. x mode will fail.<br>";
} else {
    $file = fopen($newfile, "x");
    fwrite($file, "New file created using x mode.");
    fclose($file);
    echo "New file created successfully.<br>";
}



echo "<h3>Mode: r+ (Read & Write)</h3>";
$file = fopen($filename, "r+");
fwrite($file, "Updated using r+ mode.<br>");
rewind($file);
echo fread($file, filesize($filename));
fclose($file);



echo "<h3>Mode: w+ (Read & Write)</h3>";
$file = fopen($filename, "w+");
fwrite($file, "Data written using w+ mode.<br>");
rewind($file);
echo fread($file, filesize($filename));
fclose($file);


echo "<h3>Mode: a+ (Read & Append)</h3>";
$file = fopen($filename, "a+");
fwrite($file, "Added using a+ mode.<br>");
rewind($file);
echo fread($file, filesize($filename));
fclose($file);

?>