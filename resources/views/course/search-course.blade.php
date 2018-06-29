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