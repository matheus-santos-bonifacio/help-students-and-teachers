@extends('layout')

@section('navbar')
@stop

@section('content')

<section>
    <div class="position-absolute top-50 start-50 translate-middle w-50">
        <main>
            <h1 class="text-center">Welcome the HST</h1>

            <div class="col-md-6 p-3 d-flex flex-column">
                <a href="/login-student" class="btn btn-dark mt-1" role="button">Student</a>
                <a href="/login-teacher" class="btn btn-danger mt-1" role="button">Teacher</a>
                <a href="/login-school" class="btn btn-success mt-1" role="button">School</a>
            </div>
        </main>
    </div>
</section>

@stop