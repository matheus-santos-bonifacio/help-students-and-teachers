@extends('layout')

@section('content')

<section>
    <div class="mt-3">
        <!-- Register student -->
        <a href="/register-course" class="btn btn-primary">Register course</a>

        <!-- Show student -->
        @foreach ($data as $value)
        <div class="card mt-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $value->name }}</h5>
                <p class="card-text">{{ $value->email }}</p>
                <a href="#" class="btn btn-primary">See more</a>
            </div>
        </div>
        @endforeach
    </div>
</section>

@stop