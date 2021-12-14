<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <!-- Bootstrap CSS CDN -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="/css/main.css">
    
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</body>
<nav>
  
  <div class="nav">
    <ul>
      <li>
        <div class="logo">
          <a href="{{url('/home')}}">AniMap</a>
        </div>
      </li>
    <li>
      <a href="{{url('/useranime/index')}}">My Anime</a>
    </li>
    <li>
      <a href="{{url('/anime/index')}}">Anime</a>
    </li>
    <li>
      <a href="{{url('/animesong/index')}}">Anime Song</a>
    </li>
    <li>
      <a href="{{url('/studio/index')}}">Studio</a>
    </li>
    <li>
      <a href="{{url('/about')}}">About</a>
    </li>
    <li>
      <a href="{{url('/dashboard')}}">Dashboard</a>
    </li>
  </ul>
  </div>
  
  
</nav>
@yield('content')
</html>