<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

$data_file = 'data.json';
$input = json_decode(file_get_contents('php://input'), true);

if ($input) {
    if (file_put_contents($data_file, json_encode($input))) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Could not write to file']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'No data received']);
}
?>