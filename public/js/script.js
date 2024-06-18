let affclub = "#add-project-modal";
let form = '#formData';

// Function to define get data through Ajax 
function responseData() {
    $('.active').removeClass('active');
    $("#club-btn").addClass("active");

    $('#tableData').find('tbody').html('<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>');
    setTimeout(function () {
        $.ajax({
            url: "/ajax",
            type: "GET",
            cache: false,
            success: function (response) {
                if (response) {
                    $('#tableData').find('tbody').html(response);
                }
                else {
                    $('#tableData').find('tbody').html('<center><td colspan=100%>No Data Found</td></center>');
                }
            }
        })
    }, 1000);
}
$('#club-btn').on('click', function () {
    responseData()
})
$(document).ready(function () {
    responseData()
    $('#club-btn').on('click', function () {
        responseData()
    })

    // });
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#model-btn').on('click', function () {
        $('#_method').val('POST');
        let form = '#formData';
        $(form).trigger('reset');
        // $(form).clearValidation();
        $(form).validate().resetForm();
    })
    $('#formData').submit(function (e) {
        e.preventDefault();
        if (!$(this).valid()) {
            return false
        }
        let data = new FormData((this))
        let id = $('#clubid').val()
        console.log(id);
        let url = id ? "/ajax/" + id : "/ajax"
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
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
                    responseData();
                }
                $(".modal-backdrop").hide();
                $(form).trigger('reset');
                $(affclub).modal('hide');
            },
        })
    })
})

$(document).on('click', '.edit-btn', function (e) {

    let affclub = "#add-project-modal";
    let form = '#formData';
    let id = $(this).data('id');
    $(form).validate().resetForm();
    e.preventDefault();
    $.ajax({
        url: "/ajax/" + id + "/edit",
        type: 'GET',
        async: "true",
        success: function (response) {

            console.log(response);
            $('#clubid').val(response.club.id);
            $('#model-title').text('Edit Club');
            $('#group_id').val(response.club.group_id);
            $('#business_name').val(response.club.business_name);
            $('#club_number').val(response.club.club_number);
            $('#club_name').val(response.club.club_name);
            $('#club_state').val(response.club.club_state);
            $('#club_desciption').val(response.club.club_desciption);
            $('#club_slug').val(response.club.club_slug);
            $('#website_title').val(response.club.website_title);
            $('#website_link').val(response.club.website_link);
            $(".modal-backdrop").show();
            let method = id ? 'PUT' : 'POST'
            $('#_method').val(method);
            $(affclub).modal('show');
        }
    })
});
$(document).on('click', '.delete-btn', function (e) {
    e.preventDefault();
    let id = $(this).data('id');
    console.log(id);
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
                url: '/ajax/' + id,
                type: 'DELETE',
                success: function (response) {
                    if (response.success === true) {
                        Swal.fire("Done!", response.message, "success");
                        responseData()
                    } else {
                        Swal.fire("Error!", response.message, "error");
                    }
                }
            });
        }
    })
});
