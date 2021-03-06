<?php

/*
|--------------------------------------------------------------------------
| CLI Bootstrap
|--------------------------------------------------------------------------
|
| Entry point of command line scripts under the "cli" directory.
|
*/

chdir(__DIR__);

# PHP decimal precision
ini_set('precision', 16);

# Basic definitions
require_once './definitions.php';

# Autoload
require_once VENDOR_DIR . '/autoload.php';

# Configurations
require_once CONFIG_DIR . '/env.php';
require_once CONFIG_DIR . '/log.php';
require_once CONFIG_DIR . '/database.php';
require_once CONFIG_DIR . '/curl.php';

# Framework tools
require_once BOOTSTRAP_DIR . '/framework.php';
