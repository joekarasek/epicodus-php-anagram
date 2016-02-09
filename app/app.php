<?php
// require_once - It opens the autoload.php file which Composer added into the vendor folder.
// This file is responsible for automatically loading all the other Silex files in the vendor folder into our project. Any time that you need to include external files in your code, you'll use the require_once keyword, followed by the path to the file. You need to include the path in double quotes and add a semicolon at the end of the line.
// __DIR__, which refers to your document root (the "web" folder). Then the . attaches the rest of the path to the document root path, making it into one string. 
// this path means start in the "web" folder, then go up to the project folder.
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/jobOpening.php";

// This creates a new instance of the class Silex\Application(), and stores it in a new variable called $app. This object represents our entire website as an entity. We instantiate it just like we instantiated our own classes of Car and Contact.
    $app = new Silex\Application();

// This defines a route. It shows the PHP interpreter where to go and what code to execute when a particular address is typed into the browser.
    $app->get("/", function() {
        return "Home";
    });

    return $app;



?>


