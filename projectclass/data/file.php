<?php
$csv = array_map('str_getcsv', file('../data/file.csv'));
array_walk($csv, function(&$a) use ($csv) {
    $a = array_combine($csv[0], $a);
});
array_shift($csv); # remove column header
header('Content-Type: application/json');
echo json_encode($csv);
?>