<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Education;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CardsController extends Controller
{
    public function index()
    {
        $card = Card::all();
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $jobApplication = JobApplication::find($request->input('job_application_id'));
        $request->validate([
            'job_application_id' => 'required',
            //'identity_type' => 'required|in:aadhar,passport',
            // aadhar
            'aadhar_name' => 'required_if:identity_type,aadhar',
            'aadhar_id_number' => 'required_if:identity_type,aadhar',
            'aadhar_issued_country' => 'required_if:identity_type,aadhar',
            'aadhar_issued_state' => 'required_if:identity_type,aadhar',
            'aadhar_issued_place' => 'required_if:identity_type,aadhar',
            'aadhar_image' => 'required_if:identity_type,aadhar|nullable|mimes:jpeg,png,jpg,gif,pdf|max:1024',
            'aadhar_image_page' => 'required_if:identity_type,aadhar|nullable|mimes:jpeg,png,jpg,gif,pdf|max:1024',
            // passport
            'passport_name' => 'required_if:identity_type,passport',
            'passport_id_number' => 'required_if:identity_type,passport',
            'passport_issue_date' => 'required_if:identity_type,passport',
            'passport_expired_date' => 'required_if:identity_type,passport',
            'passport_issued_country' => 'required_if:identity_type,passport',
            'passport_issued_state' => 'required_if:identity_type,passport',
            'passport_issued_place' => 'required_if:identity_type,passport',
            'passport_image_id' => 'required_if:identity_type,passport|nullable|mimes:jpeg,png,jpg,gif,pdf|max:1024',
            'passport_image_id_page' => 'required_if:identity_type,passport|nullable|mimes:jpeg,png,jpg,gif,pdf|max:1024',
        ]);
        $card = $request->all();
        if ($request->hasFile('aadhar_image')) {
            $aadharImagePath = $request->file('aadhar_image')->store('images', 'public');
            $card['aadhar_image'] = $aadharImagePath;
        }

        if ($request->hasFile('aadhar_image_page')) {
            $aadharImagePagePath = $request->file('aadhar_image_page')->store('images', 'public');
            $card['aadhar_image_page'] = $aadharImagePagePath;
        }

        if ($request->hasFile('passport_image_id')) {
            $passportImageIdPath = $request->file('passport_image_id')->store('images', 'public');
            $card['passport_image_id'] = $passportImageIdPath;
        }

        if ($request->hasFile('passport_image_id_page')) {
            $passportImageIdPagePath = $request->file('passport_image_id_page')->store('images', 'public');
            $card['passport_image_id_page'] = $passportImageIdPagePath;
        }

        $card = Card::create($card);
        return redirect()->route('education.view', ['job_application_id' => $jobApplication->id, 'card_id' => $card->id])->with('success', ' Government-Issued Identification Cards (IDs) created successfully!');
    }

    public function show($id)
    {
        $card = Card::find($id);

        return view('career.card.show', ['card' => $card,  ]);
    }

    public function edit($id)
    {
        $card = Card::find($id);
        return view('career.card.create', ['card' => $card,  ]);
    }

    public function update($id, Request $request)
    {
        //dd($request->all());
        $rules = [
            'job_application_id' => 'required',
            //'identity_type' => 'required|in:aadhar,passport',
            // aadhar
            'aadhar_name' => 'required_if:identity_type,aadhar',
            'aadhar_id_number' => 'required_if:identity_type,aadhar',
            'aadhar_issued_country' => 'required_if:identity_type,aadhar',
            'aadhar_issued_state' => 'required_if:identity_type,aadhar',
            'aadhar_issued_place' => 'required_if:identity_type,aadhar',
            // passport
            'passport_name' => 'required_if:identity_type,passport',
            'passport_id_number' => 'required_if:identity_type,passport',
            'passport_issue_date' => 'required_if:identity_type,passport',
            'passport_expired_date' => 'required_if:identity_type,passport',
            'passport_issued_country' => 'required_if:identity_type,passport',
            'passport_issued_state' => 'required_if:identity_type,passport',
            'passport_issued_place' => 'required_if:identity_type,passport'
        ];
        if ($request->hasFile('aadhar_image')) {
            $rules['aadhar_image'] = 'required_if:identity_type,aadhar|nullable|mimes:jpeg,png,jpg,gif,pdf|max:1024';
        }
        if ($request->hasFile('aadhar_image_page')) {
            $rules['aadhar_image_page'] = 'required_if:identity_type,aadhar|nullable|mimes:jpeg,png,jpg,gif,pdf|max:1024';
        }
        if ($request->hasFile('passport_image_id')) {
            $rules['passport_image_id'] = 'required_if:identity_type,passport|nullable|mimes:jpeg,png,jpg,gif,pdf|max:1024';
        }
        if ($request->hasFile('passport_image_id_page')) {
            $rules['passport_image_id_page'] = 'required_if:identity_type,passport|nullable|mimes:jpeg,png,jpg,gif,pdf|max:1024';
        }
        $request->validate($rules);

        $data = $request->all();

        if ($request->hasFile('aadhar_image')) {
            $aadharImagePath = $request->file('aadhar_image')->store('images', 'public');
            $data['aadhar_image'] = $aadharImagePath;
        }

        if ($request->hasFile('aadhar_image_page')) {
            $aadharImagePagePath = $request->file('aadhar_image_page')->store('images', 'public');
            $data['aadhar_image_page'] = $aadharImagePagePath;
        }

        if ($request->hasFile('passport_image_id')) {
            $passportImageIdPath = $request->file('passport_image_id')->store('images', 'public');
            $data['passport_image_id'] = $passportImageIdPath;
        }

        if ($request->hasFile('passport_image_id_page')) {
            $passportImageIdPagePath = $request->file('passport_image_id_page')->store('images', 'public');
            $data['passport_image_id_page'] = $passportImageIdPagePath;
        }

        $card = Card::find($id);
        if (!$request->has('identity_type')) {
            $data['identity_type'] = null;
            $data["passport_name"] = null;
            $data["passport_id_number"] = null;
            $data["passport_issue_date"] = null;
            $data["passport_expired_date"] = null;
            $data["passport_issued_country"] = null;
            $data["passport_issued_state"] = null;
            $data["passport_issued_place"] = null;
        }
        $card = $card->fill($data);
        $card->save();

        $jobApplication = JobApplication::find($card->job_application_id);

        $education = Education::where('job_application_id', $card->job_application_id)->orderBy('id', 'desc')->first();

        if (!is_null($education)) {
            return redirect()->route('career.education.edit', $education->id)->with('success', 'Government-Issued Identification Cards (IDs) updated successfully!');
        }
        else {
            return redirect()->route('education.view', ['job_application_id' => $jobApplication->id, 'card_id' => $card->id])
                ->with('success', 'Government-Issued Identification Cards (IDs) updated successfully!');
        }
    }
}
