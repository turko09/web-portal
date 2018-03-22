<?php
namespace TeamAlpha\Web;

// HTTP headers for response
header('Access-Control-Allow-Orgin: *');
header("Access-Control-Allow-Methods: GET");
header('Content-Type: application/json; charset=UTF-8');

require $_SERVER['DOCUMENT_ROOT'] . '/api/models/vehicle.php';

// Check if request method is correct
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    // Reply with error response
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(array('message' => 'Request method is not allowed.'));
    return;
}

$id = 0;

// Extract request query string
if (array_key_exists('id', $_GET)) {
    $id = intval($_GET['id']);
}

if ($id === 0) {
    // Id was not given
    // Return all vehicles

    // TO DO: Return of actual vehicles

    $response = array();

    $vehicle1 = new Vehicle();
    $vehicle1->id = 1;
    $vehicle1->make = 'honda';
    $vehicle1->model = 'civic';
    $vehicle1->color = 'white';
	$vehicle1->platenumber = 'xmm562';
    array_push($response, $vehicle1);

    $vehicle2 = new Vehicle();
    $vehicle2->id = 2;
    $vehicle2->make = 'toyota';
    $vehicle2->model = 'vios';
    $vehicle2->color = 'blue';
	$vehicle2->platenumber = 'zah888';
    array_push($response, $vehicle2);

    $vehicle3 = new Vehicle();
    $vehicle3->id = 3;
    $vehicle3->make = 'ford';
    $vehicle3->model = 'ecosport';
    $vehicle3->color = 'blue';
	$vehicle3->platenumber = 'nja4416';
    array_push($response, $vehicle3);

    // Reply with successul response
    header('HTTP/1.1 200 OK');
    echo json_encode($response);
} else {
    // TO DO: Actual check if vehicle exists
    if ($id === 404) {
        // Sample not found
        // Reply with error response
        header('HTTP/1.1 404 Not Found');
        echo json_encode(array('message' => 'Vehicle not found.'));
    } else {
        // Vehicle was found

        // TO DO: Return of actual vehicle

        $vehicle = new Vehicle();
        $vehicle->id = $id;
        $vehicle->make = 'honda';
        $vehicle->model = 'civic';
        $vehicle->color = 'white';
		$vehicle->platenumber = 'xmm562';


        // Reply with successful response
        header('HTTP/1.1 200 OK');
        echo json_encode($vehicle);
    }
}
