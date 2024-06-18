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
      {{-- @dd($clubName[7]->club->club_name); --}}
        <div id="message">
            @if (Session()->has('success'))
            <div class="container">
                <div class="alert alert-info">
                    {{Session('success')}}
                </div>
            </div>
            @endif
        </div>
        <div class="d-flex justify-content-start my-4">
            <a href="{{route('product.create')}}" class="btn btn-primary">Add Product</a>
        </div>
    @php
        $i=1
    @endphp
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Sr No</th>
            <th scope="col">Title</th>

            <th scope="col">ProductTitle</th>
            <th scope="col">clubName</th>
            <th scope="col">Type</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($clubName as $ele)
            {{-- @dump($ele) --}}
            <tr>
                <td >{{$i ++}}</td>
                <td>{{$ele->title}}</td>
                <td>{{$ele->product_title}}</td>
                <td>{{$ele->club['club_name']}}</td>
                <td>{{$ele->type}}</td>
              </tr>
              
            @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        <a href="/" class="btn btn-primary">back</a>
      </div>
    </div>

    
    @include('product.script')
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>
</html>