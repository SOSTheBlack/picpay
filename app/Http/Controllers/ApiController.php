<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 */
abstract class ApiController extends Controller
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * ApiController constructor.
     */
    public function __construct()
    {
        $this->makeRequest();
    }

    /**
     * Initializa request.
     */
    private function makeRequest(): void
    {
        $this->request = app('request');
    }
}
