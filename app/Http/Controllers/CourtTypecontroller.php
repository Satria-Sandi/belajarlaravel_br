<?php

namespace App\Http\Controllers;

use App\Models\CourtType;
use Illuminate\Http\Request;

class CourtTypecontroller extends Controller
{
    public function index(){
        $types = CourtType::all();
        return $types;
        return view('mcourt');
    }

    public function store(){
        
    }
}
