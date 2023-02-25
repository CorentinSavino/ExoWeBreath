<?php
spl_autoload_register(function ($class) {
    
   $class_path = str_replace('App\\', '', $class);

    
    $class_path =  __DIR__ .'/'. $class_path . '.php';

    
    $class_path = str_replace('\\', '/', $class_path);

    if (file_exists($class_path)) {
        require_once $class_path;
    }
});

?>