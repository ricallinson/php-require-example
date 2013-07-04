<?php

/*
    Require "php-require" from the "node_modules" folder.
*/

require("./node_modules/php-require/index.php");

/*
    Load dependences with "php-require".
*/

$yaml = $require("php-yaml");
$app = $require("php-slim");

/*
    Add a route to handle the request.
*/

$app->get('/', function () use ($yaml) {

    $quotes = $yaml->load("quotes.yaml");

    foreach ($quotes as $quote) {
        print("<p>" . $quote . "</>");
    }
});

/*
    Start the application.
*/

$app->run();
