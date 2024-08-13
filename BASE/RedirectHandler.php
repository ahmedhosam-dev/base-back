<?php
/**
 * RedirectHandler.php
 * 
 * This file contains the `redirect` function, which is responsible for redirect
 * to a specified uri. The function takes the url name and call header function to 
 * send location to redirect a page to.
 * 
 */
// Redirect to url
function redirect(string $pageURL){
    header("Location: " . $pageURL);
}