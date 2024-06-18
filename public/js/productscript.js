let form = "#form1";
let addproduct = "#productadd"


// Function is use the get the data through ajax 
function getData() {

    $('.active').removeClass('active');
    $("product-btn").addClass("active");
    // $(this).addClass("active");
    $('#tableData').find('tbody').html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>');
    setTimeout(function () {
        $.ajax({
            url: "/productAjax",
            type: "GET",
            cache: false,
            success: function (response) {
                if (response) {
                    $('#tableData').find('tbody').html(response);
                }
                else {
                    $('#tableData').find('tbody').html('<td colspan=100%>No Data Found</td>');
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }, 1000);
}

$('#product-btn').on('click', function () {
    getData()
});

// Ready Function strat

$(function () {
    getData()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#model-demo').on('click', function () {
        $('#_method').val('POST');
        $(form).trigger('reset');
        $(form).validate().resetForm();
    })

    $(form).submit(function (e) {

        e.preventDefault();
        let data = new FormData(this);
        let id = $('#productid').val();
        $(form).validate().resetForm();
        console.log(id);
        if (!$(this).valid()) {
            return false
        }
        let url = id ? "/productAjax/" + id : "/productAjax"
        $.ajax({
            url: url,
            data: data,
            type: "POST",
            processData: false,
            contentType: false,
            dataType: 'JSON',
            success: function (response) {
                if (response) {
                    Swal.fire({
                        title: "Done",
                        text: response.message,
                        type: "success"
                    });
                    getData()
                }
                $(".modal-backdrop").hide();
                $(form).trigger('reset');
                $(addproduct).modal('hide');
            },
            error: function (err) {
                Swal.fire({
                    type: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                });
                console.log(err);
            }
        })
    });
})

$(document).on('click', '.edit-btn', function (e) {
    let id = $(this).attr('data-id');
    // console.log(id);
    $(form).validate().resetForm();
    e.preventDefault();

    $.ajax({
        url: "/productAjax/" + id + "/edit",
        type: 'GET',
        async: "true",
        success: function (response) {
            // console.log(response);
            $('#model-title').text('Edit Product');
            $('#productid').val(response.product.id);
            $('#title').val(response.product.title);
            $('#product_title').val(response.product.product_title);
            $('#club_id').val(response.product.club_id);
            $('#type').val(response.product.type);
            $(".modal-backdrop").show();
            let method = id ? 'PUT' : 'POST';
            $('#_method').val(method);
            $(addproduct).modal('show');
        },
        error: function (err) {
            Swal.fire({
                type: "error",
                title: "Oops...",
                text: "Something went wrong!",
                footer: '<a href="#">Why do I have this issue?</a>'
            });
        }
    })


})

$(document).on('click', '.dlt-btn ', function (e) {
    e.preventDefault();
    let id = $(this).attr('data-id');
    // console.log(id);
    Swal.fire({
        title: "Delete?",
        type: 'question',
        text: "Please ensure and then confirm!",
        type: "warning",
        showCancelButton: !0,
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel!",
        reverseButtons: true
    }).then(function (e) {
        if (e.value === true) {
            $.ajax({
                url: "/productAjax/" + id,
                type: 'DELETE',
                success: function (response) {
                    if (response.success === true) {
                        Swal.fire("Done!", response.message, "success");
                        getData()
                    } else {
                        Swal.fire("Error!", response.message, "error");
                    }
                }
            });
        }
    })
})