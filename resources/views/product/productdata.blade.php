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
        <h1 class="s-2 text-center">Product Details</h1>
        
    <form id = "form1" action="{{route('product.store')}}" method="POST">
        @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">title</label>
              <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Product Title</label>
              <input type="text" name="product_title" class="form-control" id="product_title">
            </div>
            <div class="mb-5">
                <label for="club_id">Select club id: </label>
                <select class="form-control" name="club_id" id="club_id" aria-label="Default select example">
                    <option value="">select</option>
                    @foreach ($club as $element)
                        <option value="{{ $element->id }}">{{ $element->club_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Type</label>
                <input type="text" name="type" class="form-control" id="type">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <div class="d-flex justify-content-center">
        <a href="/" class="btn btn-primary">back</a>
      </div>
    </div>
        @include('product.script');
</body>

</html>
