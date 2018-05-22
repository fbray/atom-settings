<?php

/**
 * @file
 * settings.local.php
 */

$databases['default']['default'] = array(
  'database' => 'troynew',
  'username' => 'root',
  'password' => 'rootpassword',
  'host' => 'localhost',
  'port' => '8889',
  'driver' => 'mysql',
  'collation' => 'utf8mb4_general_ci',
);

$settings['trusted_host_patterns'] = array(
  'troy.martin',
);
