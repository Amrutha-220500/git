<?php
$file=fopen("sample.txt","w");
fwrite($file,"Hello...\nAmrutha❤💖\n em chestunav...\n thinava");
fclose($file);
echo "file written successfully";
$file=fopen("sample.txt","r");
echo "<br>Reading using fread():</br><br>";
echo fread($file,filesize("sample.txt"));
fclose($file);
echo "<b><br>";

echo "<br>Reading using file_get_contents():</b><br>";
echo nl2br(file_get_contents("sample.txt"));
echo "<b><br>";

file_put_contents("sample.txt","\n Added using file_put_contents()",FILE_APPEND);
echo "<b>Contents appened </b> <br><br>";

echo "<b>Reading using file()(array output):</b><br>";
print_r(file("sample.txt"));
echo "<b><br>";

if(file_exists("sample.txt")){
    echo "<b>file informaton:</b><br>";
    echo "Size:".filesize("sample.txt")."bytes<br>";
    echo "Type:".filetype("sample.txt")."<br>";
    echo "Accessed:".date("d-m-Y H:i:s",fileatime("sample.txt"))."<br>";
    echo "Modified:".date("d-m-Y H:i:s",filemtime("sample.txt"))."<br>";
    echo "Changed:".date("d-m-Y H:i:s",filectime("sample.txt"))."<br>";
    echo "Permissions:".decoct(fileperms("sample.txt"))."<br>";
    echo "Owner ID:".fileowner("sample.txt")."<br>";
    echo "Group id:".filegroup("sample.txt")."<br>";
    echo "Inode:".fileinode("sample.txt")."<br>";

}
//file and folder management
copy("sample.txt","copy_sample.txt");
echo "<b> file copied</b><br>";
rename("copy_sample.txt","renamed_sample.txt");
echo "<b> rename file</b><br>";
if(is_file("sample.txt"))
    echo "sample.txt is a file<br>";
mkdir("TestFolder");
echo "Folder created<br>";
if(is_dir("TestFolder"))
    echo " test folder is there<br>";
rmdir("TestFolder");

echo "folder removed<br>";
unlink("renamed_sample.txt");
echo "Renamed file delete<br>";
//directory handling
echo "<i>files using scandir</i><br>";
print_r(scandir("."));
echo "<br><br>";
echo "<i> files using opendir()& readdir()</i><br>";

$dir=opendir(".");
while(($f=readdir($dir))!==false){
    echo $f."<br>";
}
closedir($dir);
echo"<br>";
echo "<i> Current directory:</i>" .getcwd()."<br>";
chdir("..");
echo "<b> After chdir():</b>".getcwd()."<br><br>";

$filename = "sample.txt";

if (!file_exists($filename)) {
    file_put_contents($filename, "file locked🔐\n");
}

$file = fopen($filename, "r");

if ($file) {
    
    if (flock($file, LOCK_SH)) {

    
        $size = filesize($filename);
        if ($size > 0) {
            echo nl2br(fread($file, $size));
        } else {
            echo "File is empty";
        }

    
        flock($file, LOCK_UN);

    } else {
        echo "Could not lock the file";
    }
    fclose($file);

} else {
    echo "File could not be opened";
}






?>
