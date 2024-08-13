# PHP Project structure

This project is a lightweight PHP MVC (Model-View-Controller) project structure designed to provide a clean and organized structure for building web applications. The project includes routing, controller management, and page rendering functionalities.

## Project Structure

The project is organized into the following key directories and files:

- `index.php`: The entry point of the application. It handles incoming HTTP requests and routes them to the appropriate controller and action.
- `BASE/RouteHandler.php`: Contains the `route` function, responsible for routing requests to the appropriate controllers based on the requested URL.
- `Routes/route.php`: Defines the application's routes, mapping URIs to controller class names and functions.
- `__CONTROL_ROUTE.php`: Contains the `import_controller` function, which dynamically loads the appropriate controller file based on the provided class name.
- `Controllers/Controllers.php`: Maps controller filenames to their corresponding class names, serving as a registry for all controllers in the application.
- `RenderHandler.php`: Contains the `render` function, which renders the specified page with optional context data.

## Getting Started

### Prerequisites

- PHP 7.0 or higher
- A web server (e.g., Apache, Nginx)

### Installation

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/yourusername/yourproject.git
   ```

2. Navigate to the project directory:

   ```bash
   cd yourproject
   ```

3. Set up your web server to point to the project directory. For example, with Apache:

   ```apache
   <VirtualHost *:80>
       DocumentRoot "/path/to/yourproject"
       ServerName yourproject.local
       <Directory "/path/to/yourproject">
           AllowOverride All
           Require all granted
       </Directory>
   </VirtualHost>
   ```

4. Add the following entry to your `/etc/hosts` file:

   ```
   127.0.0.1 yourproject.local
   ```

### Usage

- **Defining Routes**: Add new routes in `Routes/route.php`. Each route should map a URI pattern to a controller class and function.
- **Creating Controllers**: Define your controllers in the `Controllers` directory. Register each controller in `Controllers/Controllers.php`.
- **Rendering Pages**: Use the `render` function from `RenderHandler.php` to display pages. Pass the page name and optional context data to the function.

### Example

To create a new route for an "About" page:

1. Define the route in `Routes/route.php`:

   ```php
   '/about' => ['HomeController', 'about'],
   ```

2. In `Controllers/Controllers.php`, ensure `HomeController` is mapped:

   ```php
   'homeController' => 'HomeController',
   ```

3. Create the `HomeController` class in the `Controllers` directory with an `about` function:

   ```php
   <?php
   class HomeController {
       public function about() {
           // Logic for the About page
           render('about');
       }
   }
   ```

4. Create the `about.php` file in the `pages` directory to define the content of the About page.

### License

This project is licensed under the MIT License. See the `LICENSE` file for more details.

### Contributing

Feel free to fork this repository and submit pull requests. For major changes, please open an issue to discuss what you would like to change.

### Contact

If you have any questions or issues, please open an issue on this repository or contact [ahmedhosam.dev@gmail.com](ahmedhosam.dev@gmail.com).
