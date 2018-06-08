<?php

require_once '../app/vendor/autoload.php';

try {
    $API = new DN\PerfectNumber\Controllers\ApiController($_SERVER['REQUEST_URI']);
    echo $API->processAPI();
} catch (Exception $e) {
    echo json_encode(Array('error' => $e->getMessage()));
}
?>