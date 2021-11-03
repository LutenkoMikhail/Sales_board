<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SalesBoardController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show(Announcement $announcement)
    {

    }

}
