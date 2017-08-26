<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Department;
use Request as Req;

class FacultyController extends Controller
{
    public function getDepartments(Request $request)
    {
        if (Req::ajax()) {
            $facultyId = $request->get('faculty_id');
            $departments = Department::select(['id', 'name', 'slug'])->where('faculty_id', $facultyId)->get();

            $data = [
                'departments' => $departments
            ];

            $departmentViews = \View('alumnis.departments', $data);

            $responseData = [
                'departments' => $departmentViews->render()
            ];

            return $responseData;
        }
    }
}
