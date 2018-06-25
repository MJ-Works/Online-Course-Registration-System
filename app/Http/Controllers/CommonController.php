<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Faculty;
use App\Department;
use App\Course;
use App\UserCourse;

class CommonController extends Controller
{
    public function allCourses()
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
        return redirect('faculty');
    }

    public function deleteFaculty(Request $request)
    {
        $faculty = Faculty::find($request->submit);
        $faculty->delete();
        return redirect('faculty');
    }

    public function postDepartment(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'description' => 'required|string',
            'faculty_id' => 'required',
        ]);
        
        $dbvar = new Department();
        $dbvar->name = $request->name;
        $dbvar->description = $request->description;
        $dbvar->faculty_id = $request->faculty_id;
        $dbvar->save();
        return redirect('department');
    }

    public function deleteDepartment(Request $request)
    {
        $deparment = Department::find($request->submit);
        $deparment->delete();
        return redirect('department');
    }

    public function postCourse(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string',
            'description' => 'required|string',
            'department_id' => 'required',
            'avilable' => 'required'
        ]);

        $deparment = Department::find($request->department_id);

        
        $dbvar = new Course();
        $dbvar->name = $request->name;
        $dbvar->description = $request->description;
        $dbvar->department_id = $request->department_id;
        $dbvar->faculty_id = $deparment->faculty_id;
        $dbvar->avilable = $request->avilable;
        $dbvar->save();
        return redirect('course');
    }

    public function deleteCourse(Request $request)
    {
        $deparment = Course::find($request->submit);
        $deparment->delete();
        return redirect('course');
    }

    public function addUserCourse(Request $request)
    {
        $dbvar1 = new UserCourse();
        $dbvar1->users_id = Auth::user()->id;
        $dbvar1->tags_id = $request->courses_id;
        $dbvar1->save();
        return redirect('testView');
    }

    public function deleteStudentCourse(Request $request)
    {
        $studentCourse = UserCourse::where([
            'course_id' => $request->submit,
            'user_id' => Auth::user()->id
        ])->delete();
        
        //return $studentCourse;

        return redirect('registeredCourses');
    }

    public function registeredCourse()
    {
        $userCourse = UserCourse::where('user_id', Auth::user()->id)->get();
        $courseId = array();
        foreach($userCourse as $course)
            array_push($courseId, $course->course_id);
        $allCourse = Course::with('faculty', 'department')->find($courseId);
        return view('registered_courses', compact('allCourse'));
    }
}
