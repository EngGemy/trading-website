<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\FraudulentCompanies;
use App\Models\Rating;
use App\Models\TradingCompany;
use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index()
{
    $fraudulentCompanies = FraudulentCompanies::all();
    $companies = Company::take(4)->get();

    // Assuming you have an instance of TradingCompany
    $tradingCompanies = TradingCompany::pluck('id', 'company_name_id');




    $comments = Rating::where('active', 1)->get();

    return view('index', compact('fraudulentCompanies', 'companies', 'tradingCompanies', 'comments'));
}

    public function search(Request $request)
    {
        $searchQuery = $request->input('search_query');

        // Perform the search query on your database tables and retrieve the results
        // You can customize this part based on your database structure and search logic

        $companies = Company::where('name', 'LIKE', '%' . $searchQuery . '%')->get();
        $fraudulentCompanies = FraudulentCompanies::where('name', 'LIKE', '%' . $searchQuery . '%')->get();
        $tradingCompanies = TradingCompany::where('title', 'LIKE', '%' . $searchQuery . '%')->get();
        $ratings = Rating::where('full_name', 'LIKE', '%' . $searchQuery . '%')->get();

        return view('front.search-results', compact('companies', 'fraudulentCompanies', 'tradingCompanies', 'ratings'));
    }



}
