<?php

namespace DN\PerfectNumber\Controllers;

use DN\PerfectNumber\Classification;

class ApiController extends AbstractApiController {

    protected $classificationObject;

    public function __construct($request) {
        parent::__construct($request);
        $this->classificationObject = new Classification();
    }

    /**
     * Example of an Endpoint for classification
     */
    protected function classification() {
        if (!$this->method == 'GET') {
            return $this->response(['error' => "Only accepts GET requests"], 400);
        }

        $arg = count($this->args) ? $this->args[0] : null;

        $number = filter_var($arg, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);

        if (!$number) {
            return $this->response(['error' => "Bad Parameter"], 400);
        }

        return $this->response(['result' => $this->classificationObject->getClassification($number)]);
    }

}
