<?php 
return array (
  'debug' => false,
  'salt' => 'b8e5e302edd19a02bda882585298c585',
  'url' => 'https://eniruvana.com/billing/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => true,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-data',
  'path_logs' => '/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => 'localhost',
    'name' => 'portalbilling',
    'user' => 'enportalbilling',
    'password' => 'EnsChennai2!',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);