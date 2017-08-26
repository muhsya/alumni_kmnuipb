<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Alumni;
use App\Model\Business;
use App\Model\Contact;
use App\Model\ContactType;
use App\Model\Department;
use App\Model\Education;
use App\Model\EducationPlan;
use App\Model\EducationType;
use App\Model\Faculty;
use App\Model\Suggestion;
use App\Model\Work;
use Carbon\Carbon;

class AlumniController extends Controller
{
    public function __construct()
    {
        $this->views = 'alumnis';
    }

    public function addAlumni()
    {
        $contacts = ContactType::select(['id', 'name', 'slug'])->get();
        $educations = EducationType::select(['id', 'name', 'slug'])->get();
        $faculties = Faculty::where('ipb', true)->select(['id', 'name', 'slug'])->get();
        $departments = Department::select(['id', 'name', 'slug'])->where('faculty_id', $faculties->first()->id)->get();

        $data = [
            'contacts' => $contacts,
            'educations' => $educations,
            'faculties' => $faculties,
            'departments' => $departments
        ];

        return view($this->views . '.index', $data);
    }

    public function saveDataAlumni(Request $request)
    {
        $alumni = new Alumni();
        $allData = $request->all();
        $activities = $request->get('activity');
        $activity = '';
        if ($activities) {
            foreach ($activities as $i => $activityList) {
                if ($i > 0) {
                    $activity = $activity . ", " . $activityList;
                } else {
                    $activity = $activityList;
                }
            }
        }

        $alumni->fill($allData);
        $alumni->activity = $activity;
        $alumni->born_date = Carbon::parse($request->get('born_date'));
        if (!empty($request->file('photo'))) {
            $path = public_path();
            $photoName = $request->file('photo')->getClientOriginalName();
            $photoName = strtolower(str_replace(' ', '_', $photoName));
            $this->model->photo = '/photos/alumni/' . $photoName;
            $request->file('photo')->move($path . '/photos/alumni/', $photoName);
        }
        $alumniData = $alumni->save();

        $contacts = ContactType::all();
        foreach ($contacts as $contact) {
            $value = $request->get($contact->slug);
            $cont = new Contact();
            $cont->contact_type = $contact->id;
            $cont->value = $value;
            $alumni->contacts()->save($cont);
        }

        $educations = EducationType::all();
        foreach ($educations as $education) {
            $value = $request->get($education->slug);
            $edu = new Education();
            $edu->education_type = $education->id;
            $edu->graduate = $value;
            $alumni->educations()->save($edu);
        }

        if ($request->get('sector')) {
            $business = new Business();
            $business->fill($allData);
            $alumni->business()->save($business);
        }

        if ($request->get('level_on') != "0") {
            $plan = new EducationPlan();
            $plan->fill($allData);
            $plan->type = 0;
            $plan->level = $request->get('level_on');
            $alumni->plan()->save($plan);
        }

        if ($request->get('level_plan') != "0") {
            $plan = new EducationPlan();
            $plan->fill($allData);
            $plan->type = 1;
            $plan->level = $request->get('level_plan');
            $alumni->plan()->save($plan);
        }

        $work = new Work();
        $work->fill($allData);
        $alumni->work()->save($work);

        $suggestion = new Suggestion();
        $suggestion->fill($allData);
        $alumni->suggestion()->save($suggestion);

        return view('alumnis.thanks', ['name' => $request->get('full_name')]);
    }
}
