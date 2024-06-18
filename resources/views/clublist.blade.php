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
    <div class="container">
        {{-- @dd($club); --}}
        <div id="message">
            @if (Session()->has('status'))
            <div class="container">
                <div class="alert alert-info">
                    {{Session('status')}}
                </div>
            </div>
            @endif
        </div>
        <div class="d-flex justify-content-start my-4">
            <a href="{{route('club.create')}}" class="btn btn-primary">Add Club</a>
        </div>
    @php
        $i=1
    @endphp
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Sr No</th>
            <th scope="col">businessname</th>
            <th scope="col">Club No</th>
            <th scope="col">clubName</th>
            <th scope="col">desciption</th>
      
            <th scope="col">club logo</th>
            <th scope="col">club banner</th>
            <th scope="col">website Link</th>
            {{-- <th scope="col">Action</th> --}}
          </tr>
        </thead>
        <tbody>
            @foreach ($club as $ele)
            <tr>
                <td >{{$i ++}}</td>
                <td>{{$ele->business_name}}</td>
                <td>{{$ele->club_number}}</td>
                <td>{{$ele->club_name}}</td>
                <td>{{$ele->club_desciption}}</td>
                <td><img src="images/logo/{{$ele->club_logo}}" alt="" height="80px" width="100%"></td>
                <td><img src="images/banner/{{$ele->club_banner}}" alt="" height="80px" width="100%"></td>
                <td><a href="{{$ele->website_link}}">{{$ele->website_link}}</a></td>
                {{-- <td><a href="{{route('club.show',$ele->id)}}" class="btn btn-primary">Show </a></td> --}}
              </tr>
            @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        <a href="/" class="btn btn-primary">back</a>
      </div>
    </div>
    @include('script')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>
</html>