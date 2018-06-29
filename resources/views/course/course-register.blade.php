
@extends('main')

{{-- Including  required CSS/JS/Other --}}

@section('title')
    New Course
@endsection

@section('OuterInclude')
<link href="{{ asset('css/courseRegister.css') }}" rel="stylesheet">
@endsection


@section('ContentOfBody')
    <div class="container">
        <div class=" col-sm-12 pro_head clearfix">
            <h2> <strong>Register Your</strong> Course</h2>
        </div>

        <div class="col-sm-12 well">
            <div class="form-group">
                <div class="col-lg-5">
                    <input type="hidden" name="_token" id="csrf" value="{{csrf_token()}}">
                    <select id="faculty_id" class="form-control" name="faculty_id">
                        <option value="">Select Faculty</option>
                        @foreach($data1 as $faculties)
                            <option value="{{$faculties->id}}">{{$faculties->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-lg-5">
                    <select id="department_id" class="form-control" name="department_id">
                        <option value="">Select Department</option>
                    </select>
                </div>

                <div class="col-lg-2">
                    <button id="search" class="btn btn-primary form-control "> Search </button>
                </div>

            </div>
        </div>

       
        <div id="CourseContent">
            
            @foreach($courses as $course)
                <div class="col-sm-12 well">
                    <div class="course">

                        <h1>{{$course->name}}</h1>
                        <hr>
                        <p style="text-align: justify; text-justify: inter-word;">{{$course->description}}</p>
                        
                        <form class="form-horizontal" method="POST" action="{{ route('Enroll') }}">{{ csrf_field() }} <button type="submit" value = "{{$course->id}}" name="submit" class="btn btn-primary pull-left">Enroll</button></form>
                    </div>
                    
                </div>
            @endforeach
        </div>
        
    </div>


    <script>
        $(document).ready(function(){

            $("#faculty_id").change(function(){
                // alert($('#faculty_id option:selected').val());
                $.ajax({
                    type:'POST',
                    url:'<?php echo url('getdept'); ?>',
                    data:{ faculties_id : $('#faculty_id option:selected').val(),_token :$('#csrf').val() },
                    success:function(data){
                    //    alert(data);
                    if(data == null || data == '') data='<option value="">N/A</option>';
                        $("#department_id").empty().append(data);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("Status: " + textStatus); alert("Error: " + errorThrown);
                    }
                });
            });
            $("#search").click(function(){
                var fac_val= $('#faculty_id option:selected').val();
                if(fac_val != "" )
                {
                    $.ajax({
                    type:'POST',
                    url:'<?php echo url('getdept'); ?>',
                    data:{ faculties_id : $('#faculty_id option:selected').val(),_token :$('#csrf').val() },
                    success:function(data){
                    //    alert(data);
                    if(data == null || data == '') data='<option value="">N/A</option>';
                        $("#department_id").empty().append(data);
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        alert("Status: " + textStatus); alert("Error: " + errorThrown);
                    }
                });
                }
               alert('Okk'); 
            });
        })
    </script>

@endsection





