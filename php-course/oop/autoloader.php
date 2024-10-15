<?php 

// Autoloader function
spl_autoload_register(function($className) {
    // Convert namespace to directory structure
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $fullPath = $filePath . ".php"; // This assumes classes are in the same structure as namespaces

    if (file_exists($fullPath)) {
        require $fullPath;
    } else {
        throw new Exception("Class file not found: " . $fullPath);
    }
});
