<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Alumni;
use App\Model\ContactType;
use App\Model\EducationType;
use App\Model\Faculty;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::all();

        return response()->json(['alumnis' => $alumnis]);
    }

    public function create()
    {
        $contacts = ContactType::select(['id', 'name', 'slug'])->get();
        $educations = EducationType::select(['id', 'name', 'slug'])->get();
        $faculties = Faculty::where('ipb', true)->select(['id', 'name', 'slug'])->get();

        $data = [
            'contacts' => $contacts,
            'educations' => $educations,
            'faculties' => $faculties
        ];

        return response()->json($data);
    }

    public function store(Request $request)
    {
        $model = new Alumni();
        $model->fill($request->all());
        $alumni = $model->save();

        $contacts = $request->get('contacts');

        foreach ($contacts as $key => $contact) {
            $alumniContact = new Contact();
            $alumniContact->contact_type = $key;
            $alumniContact->value = $contact;
            $alumniContact->alumni()->save($alumni);
        }

        $educations = $request->get('educations');
        foreach ($educations as $key => $education) {
            $alumniEducation = new Education();
            $alumniEducation->education_type = $key;
            $alumniEducation->graduate = $education;
            $alumniEducation->alumni()->save($alumni);
        }

        if ($alumni) {
            return response()->json(['status' => 200, 'message' => 'Data saved']);
        } else {
            return response()->json(['status' => 100, 'message' => 'Failed to save data']);
        }
    }
}
