<?php

define('WP_USE_MULTISITE', filter_var(getenv('WP_USE_MULTISITE'), FILTER_VALIDATE_BOOLEAN));

var_dump(WP_USE_MULTISITE);
