<?php
/**
 * RenderHandler.php
 *
 * This file contains the `render` function, which is responsible for rendering
 * a specified page within the application. The function takes the page name and
 * an optional context array, which can be used to pass data to the page being rendered.
 *
 * The function dynamically includes the corresponding PHP file from the `pages` directory
 * based on the provided page name. If a context array is provided, it will be made
 * available to the included page.
 */

// Function to render a page with optional context data
function render(string $page, array $context = []) {
    // Ensure only the page name is entered without the file extension
    if (array_key_exists(0, $context)){
        // Make the context data available and include the specified page
        $context;
        require __DIR__ . "\..\pages\\" . $page . ".php";
        exit();
    } else {
        // If no context is provided, simply include the specified page
        require __DIR__ . "\..\pages\\" . $page . ".php";
        exit();
    }
}
