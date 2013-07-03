<?php

/*
	Require "php-require" from the "node_modules" folder.
*/

require("./node_modules/php-require/index.php");

/*
	Load "php-yaml" using "php-require".
*/

$yaml = $require("php-yaml");

/*
	Read the quotes file using "php-yaml".
*/

$quotes = $yaml->load("quotes.yaml");

/*
	Print the content of the quotes file.
*/

foreach ($quotes as $quote) {
	print("<p>" . $quote . "</>");
}
