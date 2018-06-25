
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
@endsection





