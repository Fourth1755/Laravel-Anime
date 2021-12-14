<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/animeview.css">
    <title>Anime</title>
</head>
@extends('layouts.mainLayout')
@section('content')
<body>
    
    <div class ="container">
        <h1>All Anime</h1>
        <div class="container-in">
          <main class="grid">
            @foreach($anime as $row)
              <article>
                  <img src= "{{$row->AnimePicture}}">
                  <div class="text">
                        <h3>{{$row->AnimeName}}</h3>
                        <p>{{$row->AnimeNameThai}}</p>
                        <p>Premiered: {{$row->AnimeSeason}}</p>
                        <p>Episodes: {{$row->AnimeEpisode}}</p>
                    </div>
                </article>
                @endforeach
          </main>
        </div>
      </div>
    
</body>
@endsection
</html>
