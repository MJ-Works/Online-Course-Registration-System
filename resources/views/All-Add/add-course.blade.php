
@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
    New Course
@endsection

@section('OuterInclude')
<link href="{{ asset('css/AdminAdd.css') }}" rel="stylesheet">
@endsection


@section('ContentOfBody')
<div class="container">
        <div class=" col-sm-12 pro_head clearfix">
            <h2> <strong>Add</strong> Course</h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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
                            <td><form class="form-horizontal" method="POST" action="{{ route('DeleteCourse') }}">{{ csrf_field() }} <button type="submit" value = "{{$course->id}}" name="submit" class="btn btn-danger">Delete</button></form></td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="panel panel-default">
                    <div class="panel-heading">New Course</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('course.submit') }}">
                            {{ csrf_field() }}

                              <div class="form-group {{ $errors->has('department') ? ' has-error' : '' }}">
                                <label class="col-md-3 control-label">Department:</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="department_id"  required>
                                        @foreach($allDepartment as $deparment)
                                            <option value="{{$deparment->id}}">{{$deparment->name}}</option>
                                    @endforeach
                                    </select>
                                    @if ($errors->has('deparment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('deparment') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-3 control-label">Course Name</label>

                                <div class="col-md-8">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-3 control-label">Course Description</label>

                                <div class="col-md-8">
                                    <textarea id="description"  class="form-control" name="description" rows="8" cols="50"  required>{{ old('description') }}</textarea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('avilable') ? ' has-error' : '' }}">
                                <label for="avilable" class="col-md-3 control-label">Avilable Sit</label>

                                <div class="col-md-8">
                                    <input id="avilable" type="text" class="form-control" name="avilable" value="{{ old('avilable') }}" required autofocus>

                                    @if ($errors->has('avilable'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('avilable') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection





