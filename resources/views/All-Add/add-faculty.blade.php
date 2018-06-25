
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
            <h2> <strong>Add Or Delete</strong> Faculty</h2>
        </div>

        <div class="col-md-8 col-md-offset-2">
            <table class="table well ">
                <thead>
                <tr>
                    <th>SL</th>
                    <th>Faculty Name</th>
                    <th>Faculty Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($allFaculty as $key=>$faculty)
                        <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$faculty->name}}</td>
                        <td>{{$faculty->description}}</td>
                        <td><form class="form-horizontal" method="POST" action="{{ route('DeleteFaculty') }}">{{ csrf_field() }} <button type="submit" value = "{{$faculty->id}}" name="submit" class="btn btn-danger">Delete</button></form></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="panel panel-default">
                <div class="panel-heading">Add Faculty</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('faculty.submit')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"> New Faculty</label>

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





