<!DOCTYPE html>
<html>

<head>

    @include('Ajax.cdn')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-2">
                @include('sidebar')
            </div>
            <div class="col-10">

                <div class="container">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary my-4" data-bs-toggle="modal"
                        data-bs-target="#add-project-modal" id="model-btn">
                        Add Club
                    </button>
                    <div id="parent">
                        {{-- <div class="spinner-border text-dark" id="roller" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div> --}}
                        <table id="tableData" class="table  text-center border">
                            <thead>
                                <tr>

                                    <th scope="col">businessname</th>
                                    <th scope="col">Club No</th>
                                    <th scope="col">clubName</th>
                                    <th scope="col">desciption</th>

                                    <th scope="col">club logo</th>
                                    <th scope="col">club banner</th>
                                    <th scope="col">website Link</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>

                    </div>
                </div>
                    <!-- Modal -->
                    <div class="modal fade modal-lg" id="add-project-modal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="model-title">Modal title</h1>
                                    <button type="button" id="btn-close" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="container">

                                        <form id="formData" action="javascript:;" enctype="multipart/form-data">
                                            <input type="hidden" id="_method" name="_method" value="POST">
                                            <input type="hidden" name="id" id="clubid">

                                            <div class="row g-3">

                                                <div class="col-sm-7">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">groupid</label>
                                                    <input type="text" name="group_id" id="group_id"
                                                        class="form-control" placeholder="GoupId" aria-label="City">
                                                </div>
                                                <div class="col-sm">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">businessname</label>
                                                    <input type="text" id="business_name" name="business_name"
                                                        class="form-control" placeholder="business name"
                                                        aria-label="State">
                                                </div>
                                                <div class="col-sm">
                                                    <label for="exampleInputPassword1" class="form-label">club
                                                        no</label>
                                                    <input type="text" id="club_number" name="club_number"
                                                        class="form-control" placeholder="Enter Club No">
                                                </div>
                                            </div>
                                            <div class="row g-3 my-2">
                                                <div class="col-sm-7">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">clubname</label>
                                                    <input type="text" id="club_name" name="club_name"
                                                        class="form-control" placeholder="Enter Club Name"
                                                        aria-label="City">
                                                </div>
                                                <div class="col-sm">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">ClubState</label>
                                                    <input type="text" id="club_state" name="club_state"
                                                        class="form-control" placeholder="enter club state"
                                                        aria-label="State">
                                                </div>
                                            </div>
                                            <div class="row g-3 my-2">
                                                <div class="col-sm">
                                                    <label for="floatingTextarea">desciption</label>
                                                    <textarea class="form-control" placeholder="write here.." name="club_desciption" id="club_desciption"></textarea>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-7">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">clubslug</label>
                                                    <input type="text" name="club_slug" id="club_slug"
                                                        placeholder="Enter Club Slug" class="form-control"
                                                        id="exampleInputPassword1">
                                                </div>
                                                <div class="col-sm">
                                                    <label for="exampleInputPassword1" class="form-label">website
                                                        title</label>
                                                    <input type="text" name="website_title" id="website_title"
                                                        placeholder="Enter website title" class="form-control"
                                                        id="website_title">
                                                </div>
                                            </div>
                                            <div class="row g-3 my-2">
                                                <div class="col-sm-7 ">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">website_link</label>
                                                    <input type="text" name="website_link" id="website_link"
                                                        placeholder="Enter Website Link" class="form-control"
                                                        id="website_link">
                                                </div>
                                                <div class="col-sm ">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">club_logo</label>
                                                    <input type="file" name="club_logo" id="club_logo"
                                                        placeholder="Enter club logo" class="form-control"
                                                        id="club_logo">
                                                </div>
                                                <div class="col-sm">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">club_banner</label>
                                                    <input type="file" name="club_banner" id="club_banner"
                                                        placeholder="Enter club banner" class="form-control"
                                                        id="club_banner">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary my-3"
                                                id="btnSubmit">Submit</button>
                                        </form>
                                        <div>
                                            <a href="/" class="btn btn-primary">back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
                            </script>
                            </script>
                            <script src="https://code.jquery.com/jquery-3.7.1.min.js"
                                integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
                            <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
                            @include('script')
                            <script src="/js/script.js"></script>
                        </div>
                    </div>

                
</body>

</html>
