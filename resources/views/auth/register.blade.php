@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
    New Course
@endsection

@section('OuterInclude')


@endsection


@section('ContentOfBody')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            <input type="hidden" name="_token" id="csrf" value="{{csrf_token()}}">

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('faculty_id') ? ' has-error' : '' }}">
                                <label for="faculty_id" class="col-md-4 control-label">Faculty</label>

                                <div class="col-md-6">

                                    <select id = "faculty_id" name = "faculty_id" class="form-control" require>
                                        @foreach($data1 as $faculties)
                                            <option value="{{$faculties->id}}">{{$faculties->name}}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('faculty_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('faculty_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('department_id') ? ' has-error' : '' }}">
                                <label for="department_id" class="col-md-4 control-label">Department</label>

                                <div class="col-md-6">

                                    <select id = "department_id" name = "department_id" class="form-control" require>
                                        @foreach($data as $department)
                                            <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach
                                    </select>
                                    

                                    @if ($errors->has('department_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <input type="hidden" name="registration_number" value = "<?php echo(mt_rand(100000,10000000)) ?>">


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){

            $("#faculty_id").change(function(){

                $.ajax({
                    type:'POST',
                    url:'<?php echo url('getdept'); ?>',
                    data:{ faculties_id : $('#faculty_id option:selected').val(),_token :$('#csrf').val() },
                    success:function(data){
                    //    alert(data);
                        $("#department_id").empty().append(data);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("Status: " + textStatus); alert("Error: " + errorThrown);
                    }
                });
            });
        })
    </script>
@endsection