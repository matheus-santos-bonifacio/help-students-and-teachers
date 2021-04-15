@extends('layout')

@section('content')

<section>
    <div class="mt-3">
        <!-- Register student -->
        <a href="/register-student" class="btn btn-primary">Register student</a>

        @foreach ($data as $value)
        <!-- Show student -->
        <div class="card mt-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $value->name }}</h5>
                <p class="card-text">{{ $value->email }}</p>
                <a href="/student/{{ $value->id_student }}" class="btn btn-primary">See more</a>
            </div>
        </div>

        @endforeach
    </div>
</section>

@stop