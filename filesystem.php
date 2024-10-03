<?php 

// $bytes = filesize(__DIR__."/yousuf.txt");

// $kbytes = $bytes / 1024;

// $mbytes = $kbytes / 1024;

// $gbytes = $mbytes / 1024;

// echo $gbytes;

echo round(disk_total_space("C:") / 1024 / 1024 / 1024);
echo "<br>";
echo round(disk_free_space("C:") / 1024 / 1024 / 1024);
echo "<br>";
// echo mkdir("xyz");

if(file_exists(__DIR__."/xyz")){

    unlink(__DIR__."/xyz//abc.txt");

    rmdir(__DIR__."/xyz");

    echo "removed";
}
