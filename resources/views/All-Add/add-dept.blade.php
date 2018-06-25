
@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
    New Faculty
@endsection

@section('OuterInclude')
    <link href="{{ asset('css/AdminAdd.css') }}" rel="stylesheet">

@endsection


@section('ContentOfBody')
    <div class="container">
        <div class=" col-sm-12 pro_head clearfix">
            <h2> <strong>Add Or Delete</strong> Department</h2>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <table class="table well ">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Department Name</th>
                    <th>Department Description</th>
                    <th>Faculty Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($allDepartment as $key=>$department)
                        <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$department->name}}</td>
                        <td>{{$department->description}}</td>
                        <td>{{$department->faculty->name}}</td>
                        <td><form class="form-horizontal" method="POST" action="{{ route('DeleteDepartment') }}">{{ csrf_field() }} <button type="submit" value = "{{$department->id}}" name="submit" class="btn btn-danger">Delete</button></form></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="panel panel-default">
                <div class="panel-heading">Add Depertment</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('department.submit')}}">
                        {{ csrf_field() }}


                        <div class="form-group {{ $errors->has('faculty') ? ' has-error' : '' }}">
                            <label class="col-lg-4 control-label">Faculty:</label>
                            <div class="col-lg-6">
                                <select class="form-control" name="faculty_id"  required>
                                    @foreach($allFaculty as $faculty)
                                        <option value="{{$faculty->id}}">{{$faculty->name}}</option>
                                   @endforeach
                                </select>
                                @if ($errors->has('faculty'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('faculty') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"> New Department</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label"> Description</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection





