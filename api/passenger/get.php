<?php
namespace TeamAlpha\Web;
// HTTP headers for response
header('Access-Control-Allow-Orgin: *');
header("Access-Control-Allow-Methods: GET");
header('Content-Type: application/json; charset=UTF-8');
require $_SERVER['DOCUMENT_ROOT'] . '/api/models/passenger.php';
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
    // Return all passengers
    // TO DO: Return of actual passengers
    $response = array();
    $passenger1 = new passenger();
    $passenger1->id = 1;
    $passenger1->firstname = 'Juan';
    $passenger1->lastname = 'Palanca';
    $passenger1->email = 'juanpalanca@yahoo.com';
    $passenger1->password = 'hidden';
    $passenger1->address = 'Manila, Philippines';
    $passenger1->mobile = '09200000000';
    array_push($response, $passenger1);
    $passenger2 = new passenger();
    $passenger2->id = 2;
    $passenger2->firstname = 'Gabriella';
    $passenger2->lastname = 'Silang';
    $passenger2->email = 'gab.silang@gmail.com';
    $passenger2->password = 'hidden';
    $passenger2->address = 'Laguna, Philippines';
    $passenger2->mobile = '09211111111';
    array_push($response, $passenger2);
    $passenger3 = new passenger();
    $passenger3->id = 3;
    $passenger3->firstname = 'Maria';
    $passenger3->lastname = 'Clara';
    $passenger3->email = 'maria.clara@gmail.com';
    $passenger3->password = 'hidden';
    $passenger3->address = 'Taguig, Philippines';
    $passenger3->mobile = '09222222222';
    array_push($response, $passenger3);
    // Reply with successul response
    header('HTTP/1.1 200 OK');
    echo json_encode($response);
} else {
    // TO DO: Actual check if passenger exists
    if ($id === 404) {
        // Sample not found
        // Reply with error response
        header('HTTP/1.1 404 Not Found');
        echo json_encode(array('message' => 'Passenger not found.'));
    } else {
        // passenger was found
        // TO DO: Return of actual passenger
        $passenger = new passenger();
        $passenger->id = $id;
        $passenger->firstname = 'Maria';
        $passenger->lastname = 'Clara';
        $passenger->email = 'maria.clara@gmail.com';
        $passenger->password = 'hidden';
        $passenger->address = 'Taguig, Philippines';
        $passenger->mobile = '09222222222';
        // Reply with successful response
        header('HTTP/1.1 200 OK');
        echo json_encode($passenger);
    }
}