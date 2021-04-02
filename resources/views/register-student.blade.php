@extends('layout')

@section('content')

<!-- Form user register -->
<section>
    <div class="mt-3">
        <form method="post" action="/register-student" class="row g-3">
            @csrf

            <div class="col-md-4">
                <label for="validationName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="validationName" required>
            </div>

            <div class="col-md-4">
                <label for="validationAge" class="form-label">Age</label>
                <input type="text" name="age" class="form-control" id="validationAge" required>
            </div>

            <div class="col-md-4">
                <label for="validationEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="validationEmail" placeholder="example@gmail" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>

        </form>
    </div>
</section>

@stop