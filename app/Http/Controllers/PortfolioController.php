<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index() {
        $datafolio = Portfolio::all();


        return view('pages/portfolio',compact('datafolio'));
    }
}
