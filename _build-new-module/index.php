#!/usr/bin/php5
<?php
//echo 'Started'; exit;
// Parse command line arguments into the $_GET variable:
parse_str(implode('&', array_slice($argv, 1)), $_GET);

echo 'Name: ' . $_GET['name'] . "\n";
echo 'Description: ' . $_GET['description'] . "\n";
#exit;
$name        = ucwords($_GET['name']);
$lc_name     = strtolower($name);
$uc_name     = strtoupper($name);
$mod_lc_name = 'mod_' . str_replace(' ', '', $lc_name);
$mod_uc_name = strtoupper(str_replace(' ', '', $mod_lc_name));

$description = $_GET['description'];

include_once('_functions.php');

$new_dir     = dirname(__DIR__) . '/__builds/' . $mod_lc_name;

copy_dir(__DIR__ . '/_mod_mdul', $new_dir);

perform_renames(
    $new_dir,
    array('_mdul', str_replace(' ', '', $lc_name)),
    array(
        '{{NAME}}'        => $name,
        '{{DESCRIPTION}}' => $description,
        '_mdul'           => str_replace(' ', '', $lc_name),
        'Mdul'            => str_replace(' ', '', ucfirst($lc_name)),
        '_MDUL'           => '_' . str_replace(' ', '', $uc_name)
    )
);
?>