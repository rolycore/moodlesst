<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('ec2-34-197-135-44.compute-1.amazonaws.com');
$CFG->dbname    = getenv('d2b6offpc1c8ns');
$CFG->dbuser    = getenv('hwaszowdahsmrb');
$CFG->dbpass    = getenv('cc2d29ececcf5d6c46d3378fa365381fbefc1f170b39c9e1783a9ea5dba0ea2e');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('5001'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('http://moodle-sst.herokuapp.com/');
$CFG->dataroot  = getenv('try/temp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
