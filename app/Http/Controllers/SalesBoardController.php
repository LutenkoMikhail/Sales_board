<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesBoardController extends Controller
{
    public function index()
    {
        return response('Sales Board')->header('Content-Type', 'text/plain');
    }

}
