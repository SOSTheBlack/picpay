<?php

namespace App\Http\Controllers;

/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 */
abstract class ApiController extends Controller
{
    abstract protected function initialize(): void;
}
