<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
    $(document).ready(function() {
        // jQuery.validator.setDefaults({
        //     debug: true,
        //     success: "valid"
        // });
        $('#formData').validate({
            rules: {
                group_id: {
                    required: true,
                    number: true
                },
                business_name: {
                    required: true,
                },
                club_number: {
                    required: true,
                },
                club_name: {
                    required: true,
                    minlength: 2
                },
                club_state: {
                    required: true,
                },
                club_desciption: {
                    required: true,
                    minlength: 8
                },
                club_slug: {
                    required: true,
                },
                website_title: {
                    required: true,
                },
                website_link: {
                    required: true,
                    url: true
                },
                club_logo: {
                    required: true,
                    accept: "image/*"
                },
                club_banner: {
                    required: true,
                    accept: "image/*"
                },

            },
            messages: {
                group_id: {
                    required: "Please Enter Group Id",
                    number: "Please enter number"
                },
                business_name: {
                    required: "Please enter Business Name."
                },
                club_number: {
                    required: 'Please enter club number',
                },
                club_name: {
                    required: 'Please enter club name.',
                    minlength: 'club name must be at least 2 characters long.'
                },
                club_state: {
                    required: 'Please enter club state',
                },
                club_desciption: {
                    required: 'Please enter club description',
                    minlength: 'club description must be at least 8 characters long.'
                },
                club_slug: {
                    required: 'Please enter club slug',
                },
                website_title: {
                    required: 'Please enter website title',
                },
                website_link: {
                    required: 'Please enter website title',
                },
                club_logo: {
                    required: 'Please enter club logo',
                    accept: "Please select a extension with a valid mimetype."
                    //   extension: 'please choose valid Extension'
                },
                club_banner: {
                    required: 'Please enter club banner',
                    accept: "Please select a extension with a valid mimetype."
                }
            },
            submitHandler: function(form) {
                form.submit();
            }
        });

    });
</script>
