<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());
        $jobApplication = $request->validate([
            'sector_id' => 'required',
            'position_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            'dob' => 'required|date',
            'age' => 'required|integer|min:18|max:99',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'alternative_phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'email' => 'required|email',
            'fb_link' => 'required',
            'linked_link' => 'required',
            'instagram_link' => 'required',
            // permanent address
            'permanent_address_input' => 'required|in:yes,no',
            'permanent_city' => 'required_if:permanent_address_input,yes',
            'permanent_postal_code' => 'required_if:permanent_address_input,yes',
            'permanent_phone' => 'required_if:permanent_address_input,yes',
            'permanent_country' => 'required_if:permanent_address_input,yes',
            'permanent_address' => 'required_if:permanent_address_input,yes',

            // father name
            'father_name' => 'required',
            'father_date_of_birth' => 'required|date',
            'father_phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'father_image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            // mother name
            'mother_name' => 'required',
            'mother_date_of_birth' => 'required|date',
            'mother_phone' => ['required', 'regex:/^[0-9\s]+$/'],
            'mother_image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            // maritalStatus
            'marital_status' => 'required|in:married,single',
            'spouse_name' => 'required_if:marital_status,married',
            'spouse_date_of_birth' => 'required_if:marital_status,married',
            'spouse_email' => 'required_if:marital_status,married',
            'spouse_phone' => 'required_if:marital_status,married',
            'spouse_image' => 'required_if:marital_status,married|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',  // Adjust max size if needed
            // siblings
            'siblings' => 'required|in:yes,no',
            'siblings_name' => 'required_if:siblings,yes',
            'siblings_date_of_birth' => 'required_if:siblings,yes',
            'siblings_email' => 'required_if:siblings,yes',
            'siblings_phone' => 'required_if:siblings,yes',
            'siblings_image' => 'required_if:siblings,yes|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',  // Adjust max size if needed
        ]);

        // Upload and store father image
        if ($request->hasFile('father_image')) {
            $fatherImagePath = $request->file('father_image')->store('images', 'public');
            $jobApplication['father_image'] = $fatherImagePath;
        }

        if ($request->hasFile('mother_image')) {
            $motherImagepath = $request->file('mother_image')->store('images', 'public');
            $jobApplication['mother_image'] = $motherImagepath;
        }

        if ($request->hasFile('spouse_image ')) {
            $spouseImagepath = $request->file('spouse_image')->store('images', 'public');
            $jobApplication['spouse_image'] = $spouseImagepath;
        }
        if ($request->hasFile('siblings_image ')) {
            $siblingsImagepath = $request->file('siblings_image')->store('images', 'public');
            $jobApplication['siblings_image'] = $siblingsImagepath;
        }

        $jobApplication = JobApplication::create($jobApplication);

        return redirect()->route('card.view', ['id' => $jobApplication->id])->with('success', '  Job Application submitted successfully!');
    }


}
