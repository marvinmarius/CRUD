@extends('layout')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">DETAILS</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('index') }}"> Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details de letudiant numero {{$student->id}} :</strong>
             <p>{{ $student->firstname }} </p>
             <p>{{ $student->lastname }}</p>
             <p>{{ $student->gender }}</p>
             <p>{{ $student->country}}</p>
             <p>{{ $student->city }}</p>
             <p>{{ $student->address }}</p>

            </div>
        </div>
    </div>
@endsection
