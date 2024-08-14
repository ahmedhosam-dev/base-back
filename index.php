<?php
/**
 * index.php
 *
 * This is the entry point for the application.
 * It handles incoming HTTP requests by retrieving the requested URL,
 * processing it to remove any query strings, and then passing the 
 * cleaned URL to the route function. The route function will determine 
 * the appropriate controller and action to handle the request.
 * 
 * The file essentially acts as the front controller, routing all 
 * requests through a central location, ensuring better management 
 * of the application's URLs and requests.
 */

// Get route function from controllers
require '/BASE/RouteHandler.php';

// Get the requested URL
$request_url = $_SERVER['REQUEST_URI'];

// Remove query string from URL if present
$request_url = explode('?', $request_url, 2);

// Manage route and send request data
route($request_url[0]);
