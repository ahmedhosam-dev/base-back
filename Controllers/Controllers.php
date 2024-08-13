<?php
/**
 * Controllers.php
 *
 * This file defines a constant array `CONTROLLERS` that maps filenames
 * to their corresponding controller class names. It serves as a central
 * registry for all controllers used in the application, making it easier
 * to manage and include the correct controller files dynamically.
 *
 * Each entry in the array associates a controller's file name with its
 * class name, enabling the `import_controller` function to locate and
 * load the appropriate controller based on the route.
 */

 // Define the mapping of controller filenames to class names
 const CONTROLLERS = [
    //  filename => ClassName
    'homeController' => 'HomeController',           // Home page controller
    'notFoundController' => 'NotFoundController',   // 404 Not Found controller
];
