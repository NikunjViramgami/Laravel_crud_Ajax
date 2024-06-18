<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @dd($club);
    <div class="container">
        <div class="card" style="width: 18rem;">
            @foreach ($club as $ele)
            <img src="images/logo/{{$ele->club_logo}}" class="card-img-top" alt="logo" >
            <div class="card-body">
              <h5 class="card-title">{{$ele->club_name}}</h5>
              <p class="card-text">{{$ele->club_desciption}}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><a href="{{$ele->website_link}}">{{$ele->website_link}}</a></li>
            </ul>
            <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
            @endforeach

          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</body>
</html>