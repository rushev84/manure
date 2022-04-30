<?php


namespace App\Http\Controllers\Admin\Manure;


use App\Http\Controllers\Controller;
use App\Services\Admin\Manure\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}
