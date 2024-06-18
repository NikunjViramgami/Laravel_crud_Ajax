<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>


<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script>
    $(document).ready(function() {
        $('#form1').validate({
            rules: {
                title: {
                    required: true,
                },
                product_title: {
                    required: true,
                },
                club_id: {
                    required:true
                },
                type: {
                    required: true,
                    minlength: 2
                },
            },
            messages: {
                title: {
                    required: "Please Enter Group Id",
                },
                product_title: {
                    required: "Please enter product title"
                },
                club_id: {
                    required: 'Please select club id',
                },
                type: {
                    required: 'Please enter product type',
                    minlength: 'product type must be at least 2 characters long.'
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });
</script>
