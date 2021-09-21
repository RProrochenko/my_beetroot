<?php

$json = file_get_contents('./package.json');
define("USERS", json_decode($json, true));
