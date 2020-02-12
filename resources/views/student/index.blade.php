@extends('layout')

@section('content')
    <style>
        .container{
            padding-top: 10px;
        }
    </style>
    <div class="container">
        <div class="row " style="margin-top: 3%">
            @if (session('status'))
                <div class="alert alert-danger">
                    <span class="alert-dismissible">
                        {!! session()->get('status') !!}
                    </span>
                </div>
            @endif
        </div>

    </div>

    <div class="container">
        <div class="alert alert-success">LARAVEL 6.0 CRUD APPLICATION</div>
        <a href="{{route('create')}}" class="btn btn-info" style="margin: 2px 5px 5px 1px">add a new student </a>
        <a href="{{route('pdff')}}" class="btn btn-info" style="margin-left: 60%">Print PDF </a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">FirstName</th>
                <th scope="col">LastName</th>
                <th scope="col">gender</th>
                <th scope="col">country</th>
                <th scope="col">city</th>
                <th scope="col">address</th>
                <th scope="col" style="text-align: center">action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->firstname}}</td>
                    <td>{{$student->lastname}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->country}}</td>
                    <td>{{$student->city}}</td>
                    <td>{{$student->address}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="{{route('edit', ['id'=>$student->id])}}">edit</a>
                            <a class="btn btn-danger " href="{{route('delete', ['id'=>$student->id])}}">delete</a>
                            <a class="btn btn-success " href="{{route('show',['id'=>$student->id])}}">show</a>
                        </div>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

        <div class="container">{{$students->links()}}</div>
@endsection


