/**
 * Created by admin on 12/15/17.
 */
$(function(){
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
    })

});




$(document).ready(function() {

    "use strict";

    $(".form_submit").click(function() {

        "use strict";

        var name = $("#name").val();
        var emaild = $("#email").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        if (!name) {
            $(".form_error .name_error").addClass("show").removeClass("hide");
            return false;
        } else {
            $(".form_error .name_error").addClass("hide").removeClass("show");
        }
        if (!emaild) {
            $(".form_error .email_error").addClass("show").removeClass("hide");
            return false;
        } else {
            $(".form_error .email_error").addClass("hide").removeClass("show");
            if (testEmail.test(emaild)) {
                $(".form_error .email_val_error").addClass("hide").removeClass("show");
            } else {
                $(".form_error .email_val_error").addClass("show").removeClass("hide");
                return false;
            }
        }
        if (!message) {
            $(".form_error .message_error").addClass("show").removeClass("hide");
            return false;
        } else {
            $(".form_error .message_error").addClass("hide").removeClass("show");
        }
        if (name && emaild && message) {
            $.ajax({
                url: ROOT+'emails/add',
                data: {
                    "data[Email][fullname]": name,
                    "data[Email][email]": emaild,
                    "data[Email][subject]": subject,
                    "data[Email][message]": message
                },
                type: 'POST',
                dataType:'JSON',
                success: function(data) {
                    console.log(data)
                    if(data.success) {
                        $(".Sucess").show();
                        $(".Sucess").fadeIn(2000);
                        $(".Sucess").html("<i class='fa fa-check'></i> Dear <b>" + name + "</b> Thank you for your inquiry we will respond to you as soon as possible!");
                        $("#Name").val("");
                        $("#Email").val("");
                        $("#Subject").val("");
                        $("#Message").val("");
                        $(".form_error .name_error, .form_error .email_error, .form_error .email_val_error, .form_error .message_error, .net_error").addClass("hide").removeClass("show");
                        $("#name").val("");
                        $("#email").val("");
                        $("#subject").val("");
                        $("#message").val("");
                    } else {
                        $(".Sucess").hide();
                        $('.net_error').show();
                    }
                }
            });
        }
        return false;
    });
});
