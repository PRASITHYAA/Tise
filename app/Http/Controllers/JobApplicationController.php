<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        $jobApplication = $request->validate([
            'sector' => 'required',
            'postion' => 'required',
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
            'phone' => 'required|numeric',
            'alternative_phone' => 'required|numeric',
            'email' => 'required|email',
            'fb_link' => 'required',
            'linked_link' => 'required',
            'instagram_link' => 'required',
            // permanantaddress
            'permanant_address_input' => 'required|in:yes,no',
            'Permanant_city' => 'required_if:permanant_address_input,yes',
            'Permanant_postal_code' => 'required_if:permanant_address_input,yes',
            'permanant_phone' => 'required_if:permanant_address_input,yes',
            'permanant_country' => 'required_if:permanant_address_input,yes',
            'permanant_address' => 'required_if:permanant_address_input,yes',

            // fathername
            'father_name' => 'required',
            'father_date_of_birth' => 'required|date',
            'father_phone' => 'required|numeric',
            'father_image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            // mothername
            'mother_name' => 'required',
            'mother_date_of_birth' => 'required|date',
            'mother_phone' => 'required|numeric',
            'mother_image' => 'required|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',
            // maritalStatus
            'marital_Status' => 'required|in:married,single',
            'spouse_name' => 'required_if:marital_Status,married',
            'spouse_date_of_birth' => 'required_if:marital_Status,married|date',
            'spouse_email' => 'required_if:marital_Status,married|email',
            'spouse_phone' => 'required_if:marital_Status,married|numeric',
            'spouse_image' => 'required_if:marital_Status,married|image|mimes:jpg,jpeg,png,gif,bmp|max:50000',  // Adjust max size if needed
            // siblings
            'siblings' => 'required|in:yes,no',
            'siblings_name' => 'required_if:siblings,yes',
            'siblings_date_of_birth' => 'required_if:siblings,yes|date',
            'siblings_email' => 'required_if:siblings,yes|email',
            'siblings_phone' => 'required_if:siblings,yes|numeric',
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

        JobApplication::create($jobApplication);

        return redirect()->back()->with('success', 'Form submitted successfully!');

        // return redirect()->route('job_application.show', $jobApplication->id)
        //     ->with('success', 'Job application submitted successfully!');
    }


}