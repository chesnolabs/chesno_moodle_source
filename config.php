<?php  // Moodle configuration file
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
// !!!															   !!!
// !!!  				!!!CAUTION!!!							   !!!
// !!!		DON'T PUT SENSITIVE INFORMATION INTO THIS FILE		   !!!
// !!!			IT GOES TO THE GITHUB REPOSITORY			   	   !!!
// !!! PUT PASSWORDS TO THE .env FILE AND GET THEM HERE VIA getenv !!!
// !!!															   !!!
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('MOODLE_DB_TYPE');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('MOODLE_DB_HOST');
$CFG->dbname    = getenv('MOODLE_DB_NAME');
$CFG->dbuser    = getenv('MOODLE_DB_USER');
$CFG->dbpass    = getenv('MOODLE_DB_PASS');
$CFG->prefix    = getenv('MOODLE_DB_PREFIX');
$CFG->dboptions = [
  'dbpersist' => 0,
  'dbport' => getenv('MOODLE_DB_PORT'),
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
];

$CFG->wwwroot   = getenv('MOODLE_WWWROOT');
$CFG->dataroot  = getenv('MOODLE_DATAROOT');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

// Set upgrade key and password pepper from .env if they exist
$CFG->upgradekey = getenv('MOODLE_UPGRADEKEY') ?: null;
$CFG->passwordpepper = getenv('MOODLE_PASSWORD_PEPPER') ?: null;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
