@extends('layout')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div style="text-align: center"> <strong>modification de letudiant numero {{$student->id}} :</strong></div>
    <form action="{{ route('update',['id'=>$student->id]) }}" method="POST">
        @csrf

        <div style="justify-content: center">
            <div class="row" style="margin-left: 2%">
                <div class="col-xs-6 col-sm-6 col-md-6 ">
                    <div class="form-group">
                        <strong>firstName:</strong>
                        <input type="text" name="firstname" value="{{ old('firstname') }} "class="form-control " style="width: 50%" placeholder="firstName">
                        @if ($errors->has('firstname'))
                            <span class="error">{{ $errors->first('firstname') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <strong>lastName:</strong>
                        <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control" style="width: 50%" placeholder="lastName">
                        @if ($errors->has('lastname'))
                            <span class="error">{{ $errors->first('lastname') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <strong>gender:</strong>
                        <input type="text" class="form-control " style="width: 50%" name="gender" value="{{ old('gender') }}" placeholder="gender">
                    </div>
                    <div class="form-group">
                        <strong>country:</strong>
                        <input type="text" class="form-control" style="width: 50%" name="country" value="{{ old('country')}}" placeholder="country">
                    </div>
                    <div class="form-group">
                        <strong>city:</strong>
                        <input type="text" class="form-control" style="width: 50%" name="city" value="{{ old('city') }}"
                               placeholder="city">
                    </div>
                    <div class="form-group">
                        <strong>address:</strong>
                        <input type="text" class="form-control" style="width: 50%" name="address" value="{{ old('address') }}"placeholder="address">
                    </div>
                    <div class="row-xs-6 row-sm-6 row-md-6 " style="margin-left: 20%">
                        <a href="{{route('update',['id'=>$student->id])}}"> <button type="submit" class="btn btn-primary">Submit</button></a>
                    </div>
                </div>
            </div>
        </div>


    </form>
@endsection
