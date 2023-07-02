<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\FraudulentCompanies;
use App\Models\TradingCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class   DetailsController extends Controller
{
    public function show($companyNameId)
    {
        $validatedData = Validator::make(['company_name_id' => $companyNameId], [
            'company_name_id' => 'required|integer|exists:company_names,id',
        ])->validate();

        $tradingCompany = TradingCompany::where('company_name_id', $validatedData['company_name_id'])->firstOrFail();
        $company = $tradingCompany;
        $comments = $company->companyName->ratings()->where('active', 1)->get(); // Fetch only active comments

        $companyNameId = $validatedData['company_name_id']; // Retrieve the validated company name ID

        return view('details', compact('company', 'comments', 'companyNameId'));
    }



}
