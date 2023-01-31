<?php

namespace App\Controllers;

class Home extends BaseController
{
    public static bool $filterRan = false;

    public function index()
    {
        return 'home page<br>filter ran? : ' . (self::$filterRan ? 'true' : 'false');
    }

    public function error404()
    {
        return 'error page<br>filter ran? : ' . (self::$filterRan ? 'true' : 'false');
    }
}
