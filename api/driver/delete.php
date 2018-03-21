<?php
namespace TeamAlpha\Web;

// HTTP headers for response
header('Access-Control-Allow-Orgin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Content-Type: application/json; charset=UTF-8');

require $_SERVER['DOCUMENT_ROOT'] . '/api/models/driver.php';

// Check if request method is correct
if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
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
    echo json_encode(array('message' => 'Driver details are empty.'));
} else {
    // TO DO: Actual check if driver exists
    if ($data->id === 404) {
        // Sample not found
        // Reply with error response
        header('HTTP/1.1 404 Not Found');
        echo json_encode(array('message' => 'Driver not found.'));
    } else {
        // TO DO: Actual delete

        // Reply with successful response
        header('HTTP/1.1 200 OK');
        echo json_encode(array('message' => 'Driver record deleted.', 'driverId' => $data->id));
    }
}
