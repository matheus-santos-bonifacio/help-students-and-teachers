@extends('layout')

@section('content')

<!-- Form user register -->
<section>
    <div class="mt-3">
        <form method="post" action="/register-student" class="row g-3">
            @csrf

            <!-- Name -->
            <div class="col-md-4">
                <label for="validationName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="validationName" required>
            </div>

            <!-- Age -->
            <div class="col-md-4">
                <label for="validationAge" class="form-label">Age</label>
                <input type="text" name="age" class="form-control" id="validationAge" required>
            </div>

            <!-- Email -->
            <div class="col-md-4">
                <label for="validationEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="validationEmail" placeholder="example@gmail" required>
            </div>

            <!-- Password -->
            <div class="flex-column">
                <!-- Input password -->
                <div class="col-md-4">
                    <label for="validationPassword#1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="validationPassword#1" placeholder="minimum 8 caracters" required>
                </div>

                <!-- Confirm password -->
                <div class="col-md-4">
                    <label for="validationPassword#2" class="form-label">Confirm password</label>
                    <input type="password" name="password" class="form-control" id="validationPassword#2" required>
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary" id="submit-send">Send</button>
            </div>

        </form>
    </div>

    <script src="/js/ValidateData.js"></script>
    <script src="/js/register-student.js"></script>
</section>

@stop