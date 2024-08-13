<?php
/**
 * __CONTROL_ROUTE.php
 *
 * This file contains the `import_controller` function, which is used to
 * dynamically load controller files based on the class name provided.
 * The function searches through the predefined list of controllers, and if a match
 * is found, it returns the path to the corresponding controller file.
 *
 * This helps in managing controllers efficiently by ensuring that only the 
 * necessary controller file is included based on the requested route.
 */

// Import the appropriate controller file based on the class name
function import_controller($className)
{
    // Include the file that contains the list of available controllers
    require_once __DIR__ . '\..\Controllers\Controllers.php';

    // Loop through the list of controllers to find the one that matches the class name
    foreach(CONTROLLERS as $fileName => $controllerClass)
    {
        // If the controller have many class
        if (is_array($controllerClass)){
            for ($index = 0; $i < sizeof($controllerClass); $i++){
                if($className == $controllerClass)
                {
                    return __DIR__ . '\..\Controllers\\' . $fileName . '.php';
                }
            }
        }
        // If the class name matches, return the path to the controller file
        if($className == $controllerClass)
        {
            return __DIR__ . '\..\Controllers\\' . $fileName . '.php';
        }
    }
}
