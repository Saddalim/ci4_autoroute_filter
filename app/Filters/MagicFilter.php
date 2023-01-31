<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class MagicFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        \App\Controllers\Home::$filterRan = true;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}