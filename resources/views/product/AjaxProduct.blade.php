<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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
                <button type="button" class="btn btn-primary my-4" data-bs-toggle="modal" data-bs-target="#productadd" id="model-demo">
                    Add Product
                </button>
                <div id="parent">
                    <table id="tableData" class="table table-striped text-center border">
                        <thead>
                            <tr>
            
                                <th scope="col">Sr NO</th>
                                <th scope="col">title</th>
                                <th scope="col">productTitle</th>
                                <th scope="col">clubName</th>
                                <th scope="col">Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
            
                        </tbody>
                    </table>
                </div>
            </div>
                <!-- Modal -->
                <div class="modal fade" id="productadd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id = "form1" action="javascript:;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="_method" name="_method" value="POST">
                                    <input type="hidden" name="id" id="productid">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">title</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Product Title</label>
                                        <input type="text" name="product_title" class="form-control" id="product_title">
                                    </div>
                                    <div class="mb-5">
                                        <label for="club_id">Select club id: </label>
                                        <select class="form-control" name="club_id" id="club_id"
                                            aria-label="Default select example">
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
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
            
                        </div>
                    </div>
                </div>
            </div>
            @include('product.script')
                <script src="/js/productscript.js"></script>
            
            </div>
        </div>
   
    <!-- Button trigger modal -->
    
</body>

</html>
