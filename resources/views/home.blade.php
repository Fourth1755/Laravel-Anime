
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="/css/home.css">
</head>
@extends('layouts.mainLayout')
@section('content')
<body>
    <div class="bg">
        
    </div>
    <div class="container">
        <h1>Top Anime</h1>
        <div class="container-in">
            <table>
                <tr>
                    <th>Anime</th>
                    <th>Score</th>
                </tr>
                <tr>
                    <td>{{$anime}}</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>{{$anime2}}</td>
                    <td>9</td>
                </tr>
            </table>
        </div>
       
    </div>
</body>
@endsection
</html>