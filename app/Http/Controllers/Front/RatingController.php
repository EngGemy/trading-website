<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\CompanyName;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        Session::flash('success', 'تم الارسال للمراجعة');

        $rating = new Rating();
        $rating->email = $request->input('email');
        $rating->full_name = $request->input('full_name');
        $rating->agree_terms = $request->has('agree_terms');
        $rating->body = $request->input('body');
        $rating->rating = $request->input('rating');

        // Retrieve the CompanyName model using the provided company_name_id
        $companyNameId = $request->input('company_name_id');
        $companyName = CompanyName::findOrFail($companyNameId);

        // Associate the Rating model with the CompanyName model
        $rating->companyName()->associate($companyName);

        $rating->save();

        // Optionally, you can redirect the user to a success page or perform any other actions here

        return redirect()->back()->with('success', 'Rating submitted successfully.');
    }

    public function showComments($companyNameId)
    {
        $companyName = CompanyName::findOrFail($companyNameId);
        $comments = $companyName->ratings;

        return view('partials.comments', compact('comments'));
    }

}
