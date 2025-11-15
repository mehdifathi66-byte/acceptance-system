<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$data_file = 'data.json';

if (file_exists($data_file)) {
    echo file_get_contents($data_file);
} else {
    echo json_encode(['receiptCounter' => 1000, 'acceptanceHistory' => []]);
}
?>