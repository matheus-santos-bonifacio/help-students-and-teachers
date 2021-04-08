@extends('layout')

@section('content')

<!-- Form course register -->
<section>
    <div class="mt-3">
        <form method="post" action="/register-course" class="row g-3">
            @csrf

            <div class="col-md-6">
                <label for="validationName" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="validationName" required>
            </div>

            <div class="col-md-6">
                <label for="validationEndTime" class="form-label">Period</label>
                <select name="period" class="form-select" aria-label="Default select example" required>
                    <option selected>Open the period</option>
                    <option value="Morning">Morning</option>
                    <option value="Evening">Evening</option>
                    <option value="Night">Night</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="validationStartTime" class="form-label">Start time</label>
                <input type="date" name="start_course" class="form-control" id="validationStartTime" placeholder="xx/xx/xxxx" required>
            </div>

            <div class="col-md-6">
                <label for="validationEndTime" class="form-label">End time</label>
                <input type="date" name="end_course" class="form-control" id="validationEndTime" placeholder="xx/xx/xxxx" required>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>

        </form>
    </div>
</section>

@stop