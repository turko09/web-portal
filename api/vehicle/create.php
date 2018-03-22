<?php
namespace TeamAlpha\Web;

// HTTP headers for response
header('Access-Control-Allow-Orgin: *');
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json; charset=UTF-8');

require $_SERVER['DOCUMENT_ROOT'] . '/api/models/vehicle.php';

// Check if request method is correct
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // Reply with error response
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(array('message' => 'Request method is not allowed.'));
    return;
}

// Extract request body
$data = json_decode(file_get_contents("php://input"));

if (is_null($data)) {
    // Request body is null
    // Reply with error response
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(array('message' => 'Vehicle details are empty.'));
} else {
    // Request body is not null

    // TO DO: Actual insert

    $vehicle = new Vehicle();
    $vehicle->id = rand();
    $vehicle->make = $data->make;
    $vehicle->model = $data->model;
    $vehicle->color = $data->color;
    $vehicle->platenumber = $data->platenumber;
    $response = $data;

    // Reply with successful response
    header('HTTP/1.1 201 Created');
    header('Location: /api/vehicle/get.php?id=' . $vehicle->id);
    echo json_encode(array('message' => 'Vehicle record created.', 'vechileId' => $vehicle->id));
}
