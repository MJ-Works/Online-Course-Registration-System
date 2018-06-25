<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use App\Department;
use App\Course;

class AddController extends Controller
{
    //
    public function showAddFaculty()
    {
        $allFaculty = Faculty::all();
        return view('All-Add.add-faculty', compact('allFaculty'));
    }

    public function showAddDepartment()
    {
        $allFaculty = Faculty::all();
        $allDepartment = Department::with('faculty')->get();
        return view('All-Add.add-dept', compact('allFaculty','allDepartment'));
    }

    public function AddDepartment(Request $request)
    {
        return $request->all();
    }

    public function showAddCourse()
    {
        $allCourse = Course::with('faculty', 'department')->get();
        $allDepartment = Department::all();
        return view('All-Add.add-course', compact('allCourse','allDepartment'));
    }

    public function AddCourse(Request $request)
    {
        return $request->all();
    }

}
