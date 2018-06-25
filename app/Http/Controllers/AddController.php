<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;

class AddController extends Controller
{
    //
    public function showAddFaculty()
    {
        $allFaculty = Faculty::all();
        return view('All-Add.add-faculty', compact('allFaculty'));
    }

    public function AddFaculty(Request $request)
    {
        return $request->all();
    }

    public function showAddDepartment()
    {
        return view('All-Add.add-dept');
    }

    public function AddDepartment(Request $request)
    {
        return $request->all();
    }

    public function showAddCourse()
    {
        return view('All-Add.add-course');
    }

    public function AddCourse(Request $request)
    {
        return $request->all();
    }

}
