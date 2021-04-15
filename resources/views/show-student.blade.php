@extends('layout')

@section('content')

<!-- Student -->
<div class="position-relative p-3">
    <form action="#" class="flex-column">
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="test" class="form-control" id="name" placeholder="{{ $data->name }}" disabled>
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="test" class="form-control" id="email" placeholder="{{ $data->email }}" disabled>
        </div>

        <div class="col-md-6">
            <label for="age" class="form-label">Age</label>
            <input type="test" class="form-control" id="age" placeholder="{{ $data->age }}" disabled>
        </div>

        <div id="password">
            <!-- Input password -->
            <div class="col-md-6">
                <label for="age" class="form-label">Age</label>
                <input type="test" class="form-control" id="age" placeholder="{{ $data->age }}" disabled>
            </div>

            <!-- Confim password -->
            <div class="col-md-6">
                <label for="age" class="form-label">Age</label>
                <input type="test" class="form-control" id="age" placeholder="{{ $data->age }}" disabled>
            </div>
        </div>

        <button type="submit" class="btn btn-primary position-absolute end-0 bottom-0" disabled>
            Update
        </button>
    </form>

</div>

@stop