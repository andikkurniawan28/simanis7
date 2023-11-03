<?php


$table = 'stock';
$primaryKey = 'kode';
$columns = array(
    array( 'db' => 'kode', 'dt' => 0 ),
    array( 'db' => 'barcode',  'dt' => 1 ),
    array( 'db' => 'nama',   'dt' => 2 ),
    array( 'db' => 'golongan',   'dt' => 3 ),
    array( 'db' => 'subgol',   'dt' => 4 ),
    array( 'db' => 'satuan',   'dt' => 5 ),
);
$sql_details = array(
    'user' => 'gas',
    'pass' => 'gas123',
    'db'   => 'gas',
    'host' => '194.233.65.50',
);
require("SSP.php");
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);
