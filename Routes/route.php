<?php
/**
 * route.php
 *
 * This file defines the routes for the application. It maps specific
 * URL patterns to corresponding controller classes and their functions.
 * The routes are defined as a constant array `UII_PATTERN`, where each
 * key-value pair associates a URI with a controller and function.
 *
 * The last entry is a special route that handles not found (404) errors.
 * It's important to keep this entry at the end of the array, as it serves
 * as a fallback for unmatched routes.
 */

 // Define the routes for the application
 const UII_PATTERN = [
    //  uri => [controller class name, function name]
    '/' => ['HomeController', 'index'],          // Home page route
    '/about' => ['HomeController', 'about'],     // About page route
    '/notfound' => ['NotFoundController', 'notfound'] // 404 Not Found route (keep this at the end of the array)
];  
