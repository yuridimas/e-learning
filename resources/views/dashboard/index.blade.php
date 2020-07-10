@extends('layouts.begin_back')

@section('content')
<section class="section">
    <div class="row">
        <div class="col-md-12">

            @can('isOperator')
            <div class="alert alert-success">Operator</div>
            @elsecan('isTeacher')
            <div class="alert alert-warning">Teacher</div>
            @elsecan('isStudent')
            <div class="alert alert-danger">Student</div>
            @endcan

        </div>
    </div>
</section>
@endsection