<?php

namespace App\Http\Controllers;

use App\Models\FraudulentCompanies;
use Illuminate\Http\Request;

class FraudulentCompaniesController extends Controller
{


    public function index()
    {
        $fraudulentCompanies = FraudulentCompanies::all();
        return view('index', compact('fraudulentCompanies'));
    }


}
