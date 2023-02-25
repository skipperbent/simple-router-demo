<?php

// load composer dependencies
require '../vendor/autoload.php';


// Load our helpers
require_once '../app/helpers.php';

// Load our custom routes
require_once '../routes/web.php';

use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::enableMultiRouteRendering(false);
// Start the routing
echo SimpleRouter::start();