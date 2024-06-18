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
        <h1 class="s-2 text-center">Club Details</h1>

        <form id="form" action="{{route('club.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-sm-7">
                    <label for="exampleInputPassword1" class="form-label">groupid</label>
                    <input type="text" name="group_id" class="form-control" placeholder="GoupId" aria-label="City">
                </div>
                <div class="col-sm">
                    <label for="exampleInputPassword1" class="form-label">businessname</label>
                    <input type="text" name="business_name" class="form-control" placeholder="business name"
                        aria-label="State">
                </div>
                <div class="col-sm">
                    <label for="exampleInputPassword1" class="form-label">club no</label>
                    <input type="text" name="club_number" class="form-control" placeholder="Enter Club No">
                </div>
            </div>
            <div class="row g-3 my-2">
                <div class="col-sm-7">
                    <label for="exampleInputPassword1" class="form-label">clubname</label>
                    <input type="text" name="club_name" class="form-control" placeholder="Enter Club Name"
                        aria-label="City">
                </div>
                <div class="col-sm">
                    <label for="exampleInputPassword1" class="form-label">ClubState</label>
                    <input type="text" name="club_state" class="form-control" placeholder="enter club state"
                        aria-label="State">
                </div>
            </div>
            <div class="row g-3 my-2">
                <div class="col-sm">
                    <label for="floatingTextarea">desciption</label>
                    <textarea class="form-control" placeholder="write here.." name="club_desciption" id="floatingTextarea"></textarea>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-sm-7">
                    <label for="exampleInputPassword1" class="form-label">clubslug</label>
                    <input type="text" name="club_slug" placeholder="Enter Club Slug" class="form-control"
                        id="exampleInputPassword1">
                </div>
                <div class="col-sm">
                    <label for="exampleInputPassword1" class="form-label">website title</label>
                    <input type="text" name="website_title" placeholder="Enter website title" class="form-control"
                        id="website_title">
                </div>
            </div>
            <div class="row g-3 my-2">
                <div class="col-sm-7 ">
                    <label for="exampleInputPassword1" class="form-label">website_link</label>
                    <input type="text" name="website_link" placeholder="Enter Website Link" class="form-control"
                        id="website_link">
                </div>
                <div class="col-sm ">
                    <label for="exampleInputPassword1" class="form-label">club_logo</label>
                    <input type="file" name="club_logo" placeholder="Enter club logo" class="form-control"
                        id="club_logo">
                </div>
                <div class="col-sm">
                    <label for="exampleInputPassword1" class="form-label">club_banner</label>
                    <input type="file" name="club_banner" placeholder="Enter club banner" class="form-control"
                        id="club_banner">
                </div>
            </div>
            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
        <div>
          <a href="/" class="btn btn-primary">back</a>
        </div>
    </div>

    @include('script');

</body>

</html>
