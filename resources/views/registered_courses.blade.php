@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registered Courses</div>

                <div class="panel-body">
                    <table class="table well ">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Course Name</th>
                            <th>Course Description</th>
                            <th>Department Name</th>
                            <th>Faculty Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($allCourse as $key=>$course)
                                <tr>
                                    <th scope="row">{{++$key}}</th>
                                    <td>{{$course->name}}</td>
                                    <td>{{$course->description}}</td>
                                    <td>{{$course->department->name}}</td>
                                    <td>{{$course->faculty->name}}</td>
                                    <td><form class="form-horizontal" method="POST" action="{{ route('DeleteStudentCourse') }}">{{ csrf_field() }} <button type="submit" value = "{{$course->id}}" name="submit" class="btn btn-danger">Delete</button></form></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
