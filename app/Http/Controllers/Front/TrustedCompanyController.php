<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class TrustedCompanyController extends Controller
{
    public function index()
    {
        $companies = Company::take(4)->get(); // Retrieve 4 companies from the database

        return view('index', compact('companies'));
    }


    public function indexAll()
    {
        $companies = Company::paginate(10); // Retrieve 10 companies from the database

        return view('front.trusted', compact('companies'));
    }

}
