@extends('layout')

@section('content')


<form action="{{ route('store') }}" method="POST">
        @csrf

        <div style="justify-content: center">
            <div class="row" style="margin-left: 2%">
                <div class="col-xs-6 col-sm-6 col-md-6 ">
                    <div class="form-group">
                        <strong>firstName:</strong>
                        <input class="form-control"
                               name="firstname"  placeholder="firstName" style="width: 50%"
                               type="text" value="{{ old('firstname') }}">
                        @error('firstname')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <strong>lastName:</strong>
                        <input class="form-control" type="text"
                               name="lastname"  value="{{ old('lastname') }}" style="width: 50%" placeholder="lastName">
                        @error('lastname')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <strong>gender:</strong>
                        <input class="form-control"
                               name="gender" placeholder="gender" style="width: 50%"
                               type="text" value="{{ old('gender') }}">
                        @error('gender')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <strong>country:</strong>
                        <input class="form-control "
                               name="country"  required placeholder="country" style="width: 50%"
                               type="text" value="{{ old('country') }}">
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <strong>city:</strong>
                        <input class="form-control "
                               name="city"  required placeholder="city" style="width: 50%"
                               type="text" value="{{ old('city') }}">
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <strong>address:</strong>
                        <input class="form-control"
                               name="address"  required placeholder="address" style="width: 50%"
                               type="text" value="{{ old('address') }}">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row-xs-6 row-sm-6 row-md-6 " style="margin-left: 20%">
                        <a href="{{route('store')}}"> <button type="submit" class="btn btn-primary">Submit</button></a>
                    </div>
                </div>
            </div>
        </div>


    </form>
@endsection
