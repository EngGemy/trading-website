<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\CompanyName;
use App\Models\FraudReport;
use Illuminate\Http\Request;

class FraudReportController extends Controller
{

    public function index()
    {
        $companies = CompanyName::all(); // Assuming you have a model named "Company" representing your companies table

        return view('front.help1', compact('companies'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fraud_type' => 'required',
            'contact_method' => 'required',
            'first_contact_date' => 'required',
            'fraudster_info' => 'required',
            'fraud_method' => 'required',
            'publish_consent' => 'required',
            'company_name_id' => 'required',

        ]);

        $fraudReport = FraudReport::create($validatedData);



        return view('front.help2', ['fraud_report_id' => $fraudReport->id]);


    }

    public function contact(Request $request)
    {
        // Retrieve the fraud report ID from the session
        $fraudReportId = session('fraudReportId');

        // Find the fraud report by ID
        $fraudReport = FraudReport::findOrFail($fraudReportId);

        // Validate and store the data from form2
        $validatedData = $request->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        // Update the fraud report with form2 data
        $fraudReport->contactHelp()->create($validatedData);

        return redirect()->route('fraudulent-companies.index');
    }

}
