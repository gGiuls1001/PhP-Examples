<!-- Create rooting for application -->
<?php
// Get the requested URL from the 'url' query parameter
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : '';
// Define available routes (URL => corresponding PHP file)
$routes = [
    '' => 'pages/index.php',          // Home route
    'contact' => 'pages/contact_form.php',          // contact route
    'register' => 'pages/register.php',    // register page route
    'login' => 'pages/login.php', // login page route
    'blog' => 'pages/blog_list.php', // blog page route
    'admin' => 'pages/admin/dashboard_admin.php', // admin page route
    'user' => 'pages/user/dashboard_user.php', // user page route
];
// Check if the URL matches a route
if (array_key_exists($url, $routes)) {
    require $routes[$url];  // Load the appropriate file for the route
} else {
    // If no route matches, show a 404 page
    require 'pages/error_404.php';
}
?>