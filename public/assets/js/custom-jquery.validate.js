jQuery(document).on('ready', function($) {
    "use strict";

    /**=========================
        GET QUOTE FORM
    =========================**/
    // input attr
    $("input").attr("autocomplete", "off");
    
    // validate
    $('#get_quote_form').validate({
        // validation rules
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            phone: {
                required: true,
                number: true,
                minlength: 9,
            },
            email: {
                required: true,
                email: true,
            },
            subject: {
                required: true,
            },
            message: {
                required: true,
            },
        },
        // validation messages
        messages: {
            first_name: {
                required: "First name is required",
            },
            last_name: {
                required: "Last name is required",
            },
            phone: {
                required: "Phone is required",
                number: "Enter a valid number",
                minlength: "Enter at least 9 characters",
            },
            email: {
                required: "Email is required",
            },
            subject: {
                required: "Subject is required",
            },
            message: {
                required: "Message is required",
            },
        },
        // error message
        highlight: function (form) {
            $(form).closest('.form-control').addClass('is-invalid');
            $('label.error').addClass('theme-text-danger');
        },
        unhighlight: function (form) {
            $(form).closest(".form-control").removeClass("is-invalid");
            $('label.error').removeClass('theme-text-danger');
        },
        // submit handler
        submitHandler: function (form) {
            if ($(form).valid()) {
                form.submit();
            }
            return false;
        }
    });

    /**=========================
        CONTACT US FORM
    =========================**/
    $('#contact_form').validate({
        // validation rules
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            phone: {
                required: true,
                number: true,
                minlength: 9,
            },
            email: {
                required: true,
                email: true,
            },
            subject: {
                required: true,
            },
            message: {
                required: true,
            },
        },
        // validation messages
        messages: {
            first_name: {
                required: "First name is required",
            },
            last_name: {
                required: "Last name is required",
            },
            phone: {
                required: "Phone is required",
                number: "Enter a valid number",
                minlength: "Enter at least 9 characters",
            },
            email: {
                required: "Email is required",
            },
            subject: {
                required: "Subject is required",
            },
            message: {
                required: "Message is required",
            },
        },
        // error message
        highlight: function (form) {
            $(form).closest('.form-control').addClass('is-invalid');
            $('label.error').addClass('theme-text-danger');
        },
        unhighlight: function (form) {
            $(form).closest(".form-control").removeClass("is-invalid");
            $('label.error').removeClass('theme-text-danger');
        },
        // submit handler
        submitHandler: function (form) {
            if ($(form).valid()) {
                form.submit();
            }
            return false;
        }
    });

    /**=========================
        SEARCH FORM
    =========================**/
    $('#search_form').validate({
        // validation rules
        rules: {
            search_input: {
                required: true,
            },
        },
        // validation messages
        messages: {
            search_input: {
                required: "Keyword is required",
            },
        },
        // error message
        highlight: function (form) {
            $(form).closest('.form-control').addClass('is-invalid');
            $('label.error').addClass('theme-text-danger');
            $('form#search_form').addClass('input-group-validate');
        },
        unhighlight: function (form) {
            $(form).closest(".form-control").removeClass("is-invalid");
            $('label.error').removeClass('theme-text-danger');
            $('form#search_form').removeClass('input-group-validate');
        },
        // submit handler
        submitHandler: function (form) {
            if ($(form).valid()) {
                form.submit();
            }
            return false;
        }
    });

    /**=========================
        SEARCH FORM
    =========================**/
    $('#comment_form').validate({
        // validation rules
        rules: {
            comment_text: {
                required: true,
            },
            name: {
                required: true,
            },
            phone: {
                required: true,
                number: true,
                minlength: 9,
            },
        },
        // validation messages
        messages: {
            comment_text: {
                required: "Comment is required",
            },
            name: {
                required: "Name is required",
            },
            phone: {
                required: "Phone is required",
                number: "Enter a valid number",
                minlength: "Enter at least 9 characters",
            },
        },
        // error message
        highlight: function (form) {
            $(form).closest('.form-control').addClass('is-invalid');
            $('label.error').addClass('theme-text-danger');
        },
        unhighlight: function (form) {
            $(form).closest(".form-control").removeClass("is-invalid");
            $('label.error').removeClass('theme-text-danger');
        },
        // submit handler
        submitHandler: function (form) {
            if ($(form).valid()) {
                form.submit();
            }
            return false;
        }
    });

}(jQuery)); // End jQuery