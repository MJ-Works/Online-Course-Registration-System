<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    //
    public function showAddFaculty()
    {
        return view('All-Add.add-faculty');
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
