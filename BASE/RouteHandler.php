<?php
/**
 * RouteHandler.php
 *
 * This file contains the `route` function, which is responsible for
 * handling URL routing in the application. It matches the requested
 * URL against predefined patterns and invokes the corresponding
 * controller functions. If a matching route is not found, it handles
 * unknown URIs by invoking a fallback function.
 *
 * This file ensures that each URL request is routed to the appropriate
 * part of the application, allowing for clean and organized management
 * of different routes and their corresponding controllers.
 */

function route(string $uri)
{
    // Include the file that defines the routes
    require __DIR__ . '/../Routes/route.php';

    // Include the file that handles route control logic
    require __DIR__ . '/__CONTROL_ROUTE.php';

    // Define the routes using the pattern and function name associations
    /* ! Ensure that no two functions have the same name ! */
    $routes = UII_PATTERN;

    // Loop through the defined routes to find a match for the requested URI
    foreach ($routes as $pattern => $func) {
        if (preg_match("#^$pattern$#", $uri, $matches)) {
            try {
                // Import the controller associated with the route and call the function
                require import_controller($func[0]);
                call_user_func($func);
                exit();
            } catch (Exception $e) {
                // Handle any exceptions by calling the fallback function for the route
                require import_controller($func[0]);
                call_user_func(end($routes));
                exit();
            }
        }
    }
    
    // If no routes match, handle the unknown URI with a default fallback route
    require import_controller(end($routes)[0]);
    call_user_func(end($routes));
    exit();
}
