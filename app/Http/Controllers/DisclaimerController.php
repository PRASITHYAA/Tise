<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use App\Models\Card;
use App\Models\Disclaimer;
use App\Models\Education;
use App\Models\Employment;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DisclaimerController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());

        $data = $request->validate([
            'job_application_id' => 'required',
            'expected_date_to_join' => 'required|date',
            'current_salary' => 'required|numeric',
            'expected_salary' => 'required|numeric',
            'disclaimer_signature' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'disclaimer_date' => 'required',
            'disclaimer_time' => 'required',
            'disclaimer_print_name' => 'required',
            'disclaimer_place' => 'required',
        ]);

        if ($request->hasFile('disclaimer_signature')) {
            $signatureImagePath = $request->file('disclaimer_signature')->store('images', 'public');
            $data['disclaimer_signature'] = $signatureImagePath;
        }

        $disclaimer = Disclaimer::create($data);

        return redirect()->route('acknowledgement', ['job_application_id' => $disclaimer->job_application_id, 'disclaimer_id' => $disclaimer->id])->with('success', ' Disclaimer And All The Forms Are created successfully');
    }

    public function show($id)
    {
        $disclaimer = Disclaimer::find($id);

        return view('career.disclaimer.show', ['disclaimer' => $disclaimer,]);
    }

    public function edit($id)
    {
        $disclaimer = Disclaimer::find($id);

        $achievement = Achievement::where('job_application_id', $disclaimer->job_application_id)->orderBy('id', 'desc')->first();

        return view('career.disclaimer.create', ['disclaimer' => $disclaimer, 'achievement_id' => $achievement->id]);
    }


    public function update($id, Request $request)
    {
        // dd($request->all());

        $rules = [
            'job_application_id' => 'required',
            'expected_date_to_join' => 'required|date',
            'current_salary' => 'required|numeric',
            'expected_salary' => 'required|numeric',
            'disclaimer_date' => 'required',
            'disclaimer_time' => 'required',
            'disclaimer_print_name' => 'required',
            'disclaimer_place' => 'required',
        ];

        if ($request->hasFile('disclaimer_signature')) {
            $rules['disclaimer_signature'] = 'required|image|mimes:jpeg,png,jpg,gif|max:2048';
        }

        $data = $request->validate($rules);

        if ($request->hasFile('disclaimer_signature')) {
            $signatureImagePath = $request->file('disclaimer_signature')->store('images', 'public');
            $data['disclaimer_signature'] = $signatureImagePath;
        }

        $disclaimer = Disclaimer::find($id);
        $disclaimer->fill($data);
        $disclaimer->save();

        return redirect()->route('acknowledgement', ['job_application_id' => $disclaimer->job_application_id, 'disclaimer_id' => $disclaimer->id])->with('success', ' Disclaimer And All The Forms Are created successfully');
    }

    public function acknowledgement(Request $request)
    {
        $data = JobApplication::find($request->job_application_id);
        return view('career.acknowledgement.view', compact('data'));
    }

    public function downloadPdf(Request $request)
     {
     $application = JobApplication::find($request->id);
        $data = $application->toArray();
     $disclaimer = Disclaimer::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($disclaimer,$data);
        $education = Education::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($education,$data);
        $card = Card::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($card,$data);
        $achievement = Achievement::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($achievement,$data);
        $employment = Employment::where('job_application_id', $request->id)->first()->toArray();
        $data = array_merge($employment,$data);
        $pdf = Pdf::loadView('pdf.application', $data);
        return $pdf->download('job_application_'.$application->first_name.'.pdf');
    }
}