<?php namespace Vanchelo\Test\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller
{

    public function index()
    {
        return "Hello from " . __METHOD__;
    }

}
