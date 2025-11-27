<?php
unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('MOODLE_DBTYPE');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('MOODLE_DBHOST');
$CFG->dbname    = getenv('MOODLE_DBNAME');
$CFG->dbuser    = getenv('MOODLE_DBUSER');
$CFG->dbpass    = getenv('MOODLE_DBPASS');
$CFG->prefix    = getenv('MOODLE_PREFIX');
$CFG->dboptions = array(
    'dbpersist' => false,
    'dbsocket'  => false,
    'dbport'    => getenv('MOODLE_DBPORT'),
    'dbhandlesoptions' => false,
    'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = getenv('MOODLE_WWWROOT');
$CFG->dataroot  = getenv('MOODLE_DATAROOT');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02777;

// Upgrade key
$CFG->upgradekey = getenv('MOODLE_UPGRADEKEY');

// Password pepper
$passwordpepper = getenv('MOODLE_PASSWORD_PEPPER');
if ($passwordpepper) {
    $CFG->passwordpeppers = [
        1 => $passwordpepper
    ];
}


require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
