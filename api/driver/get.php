<?php
namespace TeamAlpha\Web;

// HTTP headers for response
header('Access-Control-Allow-Orgin: *');
header("Access-Control-Allow-Methods: GET");
header('Content-Type: application/json; charset=UTF-8');

require $_SERVER['DOCUMENT_ROOT'] . '/api/models/driver.php';

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
    // Return all drivers

    // TO DO: Return of actual drivers

    $response = array();

    $driver1 = new Driver();
    $driver1->id = 1;
    $driver1->firstname = 'Juan';
    $driver1->lastname = 'Dela Cruz';
    $driver1->email = 'juan@delacruz.com';
    $driver1->password = 'hidden';
    $driver1->address = 'Manila, Philippines';
    $driver1->mobile = '09200000000';
    array_push($response, $driver1);

    $driver2 = new Driver();
    $driver2->id = 2;
    $driver2->firstname = 'John';
    $driver2->lastname = 'Doe';
    $driver2->email = 'john@doe.com';
    $driver2->password = 'hidden';
    $driver2->address = 'Laguna, Philippines';
    $driver2->mobile = '09211111111';
    array_push($response, $driver2);

    $driver3 = new Driver();
    $driver3->id = 3;
    $driver3->firstname = 'Joe';
    $driver3->lastname = 'Bloggs';
    $driver3->email = 'joe@bloggs.com';
    $driver3->password = 'hidden';
    $driver3->address = 'Taguig, Philippines';
    $driver3->mobile = '09222222222';
    array_push($response, $driver3);

    // Reply with successul response
    header('HTTP/1.1 200 OK');
    echo json_encode($response);
} else {
    // TO DO: Actual check if driver exists
    if ($id === 404) {
        // Sample not found
        // Reply with error response
        header('HTTP/1.1 404 Not Found');
        echo json_encode(array('message' => 'Driver not found.'));
    } else {
        // Driver was found

        // TO DO: Return of actual driver

        $driver = new Driver();
        $driver->id = $id;
        $driver->firstname = 'Juan';
        $driver->lastname = 'Dela Cruz';
        $driver->email = 'juan@delacruz.com';
        $driver->password = 'hidden';
        $driver->address = 'Manila, Philippines';
        $driver->mobile = '09200000000';

        // Reply with successful response
        header('HTTP/1.1 200 OK');
        echo json_encode($driver);
    }
}
