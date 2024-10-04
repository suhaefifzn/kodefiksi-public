<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function decodeJsonResponse($json) {
        return $json->getData('data');
    }
}
