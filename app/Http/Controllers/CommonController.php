<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;

class CommonController extends Controller
{
    public function commmon()
    {
        return view('testView');
    }

    public function postFaculty(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
        
        $dbvar = new Faculty();
        $dbvar->name = $request->name;
        $dbvar->description = $request->description;
        $dbvar->save();
        return redirect('testView');
    }
}
