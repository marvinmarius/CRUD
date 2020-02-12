<html>
<head>
    <title>Laravel Generate &amp; Download Pdf Tutorial</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    body{
        background-color: #f1f1f1;
    }
</style>
<body>



    <div class="container">
        <div class="alert alert-success">LARAVEL 6.0 CRUD APPLICATION</div>
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
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

</body>>
</html>

