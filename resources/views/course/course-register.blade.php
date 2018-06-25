
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
            <div class="course">

                <h1>This is a Title.</h1>
                <hr>
                <p style="text-align: justify; text-justify: inter-word;">t has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                
                <button class="btn btn-primary pull-left"> Enroll For This Course</button>
                <button class="btn btn-danger pull-right"> Disable This Course</button>
            </div>
            
        </div>

        <div class="col-sm-12 well">
            <div class="course">

                <h1>This is a Title.</h1>
                <hr>
                <p style="text-align: justify; text-justify: inter-word;">t has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                
                <button class="btn btn-primary pull-left"> Enroll For This Course</button>
                <button class="btn btn-danger pull-right"> Disable This Course</button>
            </div>
            
        </div>


            <div class="col-sm-12 well">
                <div class="course">
    
                    <h1>This is a Title.</h1>
                    <hr>
                    <p style="text-align: justify; text-justify: inter-word;">t has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                    
                    <button class="btn btn-primary pull-left"> Enroll For This Course</button>
                    <button class="btn btn-danger pull-right"> Disable This Course</button>
                </div>
                
            </div>
    </div>
@endsection





