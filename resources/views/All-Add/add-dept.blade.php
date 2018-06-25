
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
                    <th>Dept Name</th>
                    <th>Dept Desc</th>
                    <th>Faculty Name</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Engineering</td>
                        <td>Engineering</td>
                        <td>Something</td>
                        <td><button class="btn btn-default">Delete</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Engineering</td>
                        <td>Engineering</td>
                        <td>Something</td>
                        <td><button class="btn btn-default">Delete</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Engineering</td>
                        <td>Engineering</td>
                        <td>Something</td>
                        <td><button class="btn btn-default">Delete</button></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Engineering</td>
                        <td>Engineering</td>
                        <td>Something</td>
                        <td><button class="btn btn-default">Delete</button></td>
                    </tr>


                {{--@php--}}
                    {{--$i=1--}}
                {{--@endphp--}}

                {{--@foreach($Categories as $category)--}}
                    {{--<tr>--}}
                        {{--<td>{{$i}}</td>--}}
                        {{--<td>{{$category->Category}}</td>--}}
                        {{--<td>--}}
                            {{--<form action="#" method="post">--}}
                                {{--{{ csrf_field() }}--}}
                                {{--<input name="id" value="{{$category->Category}}" type="hidden" >--}}
                                {{--<button class="btn btn-default">Delete</button>--}}
                            {{--</form>--}}

                        {{--</td>--}}
                    {{--</tr>--}}
                    {{--@php--}}
                        {{--$i+=1;--}}
                    {{--@endphp--}}
                {{--@endforeach--}}

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
                                <select class="form-control" name="faculty"  required>
                                    <option value="1">Eng</option>
                                    <option value="1">Eng</option>
                                    <option value="1">Eng</option>
                                    <option value="1">Eng</option>
                                    {{-- @foreach($Categories as $category)
                                        <option value="{{$category->Category}}">{{$category->Category}}</option>
                                    @endforeach --}}

                                </select>
                                @if ($errors->has('faculty'))
                                    <span class="help-block">
                                    <strong>{{ $errors->first('faculty') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('department') ? ' has-error' : '' }}">
                            <label for="department" class="col-md-4 control-label"> New Faculty</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control" name="department" value="{{ old('faculty') }}" required autofocus>

                                @if ($errors->has('department'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('department') }}</strong>
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





