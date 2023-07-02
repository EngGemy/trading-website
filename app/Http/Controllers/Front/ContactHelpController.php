<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactHelp;
use Illuminate\Http\Request;

class ContactHelpController extends Controller
{
    public function store(Request $request, $fraud_report_id)
    {
        $contactHelp = ContactHelp::create([
            'full_name' => $request->input('full_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'fraud_report_id' => $fraud_report_id, // Assign the fraud_report_id
        ]);

        // Optionally, you can associate the created contact help with a fraud report.
        // You can retrieve the fraud report ID from the request and set it on the contact help model.

        // $fraudReportId = $request->input('fraud_report_id');
        // $contactHelp->fraud_report_id = $fraudReportId;
        // $contactHelp->save();

        // You can add any additional logic here, such as sending notifications or redirecting to a thank you page.
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

}
