var current_slide, next_slide, previous_slide;
var left, opacity, scale;
var animation;

var error = false;



// step 1 validation

// city live in

$("#city_live").keyup(function() {
    var city_live = $("#city_live").val();
    if (!city_live.test($("#city_live").val())) {
        $("#error-city_live").text('Please enter Your City Name.');
        $("#city_live").addClass("box_error");
        error = true;
    } else {
        $("#error-city_live").text('');
        error = false;
        $("#city_live").removeClass("box_error");
    }
});


// family live
$("#live_family").keyup(function() {
    var live_family = $("#live_family").val();
    if (!live_family.test($("#live_family").val())) {
        $("#error-live_family").text('Please Specify Where You Live.');
        $("#live_family").addClass("box_error");
        error = true;
    } else {
        $("#error-live_family").text('');
        error = false;
        $("#live_family").removeClass("box_error");
    }
});

// Marital Status

$("#material_status").keyup(function() {
    var material_status = $("#material_status").val();
    if (!material_status.test($("#material_status").val())) {
        $("#error-material_status").text('Please Specify Marital Status.');
        $("#material_status").addClass("box_error");
        error = true;
    } else {
        $("#error-material_status").text('');
        error = false;
        $("#material_status").removeClass("box_error");
    }
});

// DIet

$("#diet").keyup(function() {
    var diet = $("#diet").val();
    if (!diet.test($("#diet").val())) {
        $("#error-diet").text('Please Specify Diet.');
        $("#diet").addClass("box_error");
        error = true;
    } else {
        $("#error-diet").text('');
        error = false;
        $("#diet").removeClass("box_error");
    }
});

// height

$("#height").keyup(function() {
    var height = $("#height").val();
    if (!height.test($("#height").val())) {
        $("#error-height").text('Please Specify Your Height.');
        $("#height").addClass("box_error");
        error = true;
    } else {
        $("#error-height").text('');
        error = false;
        $("#height").removeClass("box_error");
    }
});

$("#sub_community").keyup(function() {
    var sub_community = $("#sub_community").val();
    if (!sub_community.test($("#sub_community").val())) {
        $("#error-sub_community").text('Please Specify Sub Community.');
        $("#sub_community").addClass("box_error");
        error = true;
    } else {
        $("#error-sub_community").text('');
        error = false;
        $("#sub_community").removeClass("box_error");
    }
});

// first step validation
$(".fs_next_btn").click(function() {
    // City live
    if ($("#city_live").val() == '') {
        $("#error-city_live").text('Enter your City Name.');
        $("#city_live").addClass("box_error");
        error = true;
    } else {
        var city_live = $("#city_live").val();
        if (city_live !== city_live) {
            $("#error-city_live").text('City Name is required.');
            error = true;
        } else {
            $("#error-city_live").text('');
            $("#city_live").removeClass("box_error");
            error = false;
        }
    }
    // Family live
    if ($("#live_family").val() === '') {
        $("#error-live_family").text('Enter Where You Live.');
        $("#live_family").addClass("box_error");
        error = true;
    } else {
        var live_family = $("#live_family").val();
        if (live_family !== live_family) {
            $("#error-live_family").text('Enter Family Detail Required.');
            error = true;
        } else {
            $("#error-live_family").text('');
            $("#live_family").removeClass("box_error");
            error = false;
        }
    }

    // Marital Status

    if ($("#material_status").val() === '') {
        $("#error-material_status").text('Select Your Marital Status.');
        $("#material_status").addClass("box_error");
        error = true;
    } else {
        var material_status = $("#material_status").val();
        if (material_status !== material_status) {
            $("#error-material_status").text('Marital Status required.');
            error = true;
        } else {
            $("#error-material_status").text('');
            $("#live_material_status").removeClass("box_error");
            error = false;
        }
    }

    // Diet Validation
    if ($("#diet").val() === '') {
        $("#error-diet").text('Select Your Diet.');
        $("#diet").addClass("box_error");
        error = true;
    } else {
        var diet = $("#diet").val();
        if (diet !== diet) {
            $("#error-diet").text('Diet required.');
            error = true;
        } else {
            $("#error-diet").text('');
            $("#diet").removeClass("box_error");
            error = false;
        }
    }

    // Height
    if ($("#height").val() === '') {
        $("#error-height").text('Select Your Height.');
        $("#height").addClass("box_error");
        error = true;
    } else {
        var height = $("#height").val();
        if (height !== height) {
            $("#error-height").text('Diet required.');
            error = true;
        } else {
            $("#error-height").text('');
            $("#height").removeClass("box_error");
            error = false;
        }
    }

    // subcommunity

    if ($("#sub_community").val() === '') {
        $("#error-sub_community").text('Sub Community is Required.');
        $("#sub_community").addClass("box_error");
        error = true;
    } else {
        var sub_community = $("#sub_community").val();
        if (sub_community !== sub_community) {
            $("#error-sub_community").text('Sub Community is Required.');
            error = true;
        } else {
            $("#error-sub_community").text('');
            $("#sub_community").removeClass("box_error");
            error = false;
        }
    }

    // animation
    if (!error) {
        if (animation) return false;
        animation = true;

        current_slide = $(this).parent().parent();
        next_slide = $(this).parent().parent().next();

        $("#progress_header li").eq($(".multistep-box1").index(next_slide)).addClass("active");

        next_slide.show();
        current_slide.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_slide.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_slide.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_slide.hide();
                animation = false;
            },
            easing: 'easeInOutBack'
        });
    }
});


// step 2 validation

// Education
$("#high_education").keyup(function() {
    var high_education = $("#high_education").val();
    if (!high_education.test($("#high_education").val())) {
        $("#error-high_education").text('Please enter Your Education.');
        $("#high_education").addClass("box_error");
        error = true;
    } else {
        $("#error-high_education").text('');
        error = false;
        $("#high_education").removeClass("box_error");
    }
});

// College Name
$("#college_name").keyup(function() {
    var college_name = $("#college_name").val();
    if (!college_name.test($("#college_name").val())) {
        $("#error-college_name").text('Please enter Your Education.');
        $("#college_name").addClass("box_error");
        error = true;
    } else {
        $("#error-college_name").text('');
        error = false;
        $("#college_name").removeClass("box_error");
    }
});

// work with

$("#work_with").keyup(function() {
    var work_with = $("#work_with").val();
    if (!work_with.test($("#work_with").val())) {
        $("#error-work_with").text('Please Select Your Company Name.');
        $("#work_with").addClass("box_error");
        error = true;
    } else {
        $("#error-work_with").text('');
        error = false;
        $("#work_with").removeClass("box_error");
    }
});

// designation
$("#designation").keyup(function() {
    var designation = $("#designation").val();
    if (!designation.test($("#designation").val())) {
        $("#error-designation").text('Please Select Your Designation.');
        $("#designation").addClass("box_error");
        error = true;
    } else {
        $("#error-designation").text('');
        error = false;
        $("#designation").removeClass("box_error");
    }
});


// current Company

$("#current_company").keyup(function() {
    var current_company = $("#current_company").val();
    if (!current_company.test($("#current_company").val())) {
        $("#error-current_company").text('Please Select Your Designation.');
        $("#current_company").addClass("box_error");
        error = true;
    } else {
        $("#error-current_company").text('');
        error = false;
        $("#current_company").removeClass("box_error");
    }
});

// salary

$("#salary").keyup(function() {
    var salary = $("#salary").val();
    if (!salary.test($("#salary").val())) {
        $("#error-salary").text('Please Select Your Salary.');
        $("#salary").addClass("box_error");
        error = true;
    } else {
        $("#error-salary").text('');
        error = false;
        $("#salary").removeClass("box_error");
    }
});



// second step validation
$(".ss_next_btn").click(function() {
    // Education
    if ($("#high_education").val() === '') {
        $("#error-high_education").text('Please enter Your Education.');
        $("#high_education").addClass("box_error");
        error = true;
    } else {
        var high_education = $("#high_education").val();
        if (high_education !== high_education) {
            $("#error-high_education").text('Please enter Your Education.');
            error = true;
        } else {
            $("#error-high_education").text('');
            $("#high_education").removeClass("box_error");
            error = false;
        }
    }
    // College Name
    if ($("#college_name").val() === '') {
        $("#error-college_name").text('Please enter College Name.');
        $("#college_name").addClass("box_error");
        error = true;
    } else {
        var college_name = $("#college_name").val();
        if (college_name !== college_name) {
            $("#error-college_name").text('Please enter Your College Name.');
            error = true;
        } else {
            $("#error-college_name").text('');
            $("#college_name").removeClass("box_error");
            error = false;
        }
    }

    // WOrk With Company
    if ($("#work_with").val() === '') {
        $("#error-work_with").text('Please Select Your Company Name.');
        $("#work_with").addClass("box_error");
        error = true;
    } else {
        var work_with = $("#work_with").val();
        if (work_with !== work_with) {
            $("#error-work_with").text('Please Select Your Company Name.');
            error = true;
        } else {
            $("#error-work_with").text('');
            $("#work_with").removeClass("box_error");
            error = false;
        }
    }

    // designation

    if ($("#designation").val() === '') {
        $("#error-designation").text('Please Select Your Designation.');
        $("#designation").addClass("box_error");
        error = true;
    } else {
        var designation = $("#designation").val();
        if (designation !== designation) {
            $("#error-designation").text('Please Select Your Designation.');
            error = true;
        } else {
            $("#error-designation").text('');
            $("#designation").removeClass("box_error");
            error = false;
        }
    }

    // current Company Name
    if ($("#current_company").val() === '') {
        $("#error-current_company").text('Enter Your Current Company Name.');
        $("#current_company").addClass("box_error");
        error = true;
    } else {
        var current_company = $("#current_company").val();
        if (current_company !== current_company) {
            $("#error-current_company").text('Enter Your Current Company Name.');
            error = true;
        } else {
            $("#error-current_company").text('');
            $("#current_company").removeClass("box_error");
            error = false;
        }
    }

    // Salary

    if ($("#salary").val() === '') {
        $("#error-salary").text('Please Select Your Salary..');
        $("#salary").addClass("box_error");
        error = true;
    } else {
        var salary = $("#salary").val();
        if (salary !== salary) {
            $("#error-salary").text('Please Select Your Salary..');
            error = true;
        } else {
            $("#error-salary").text('');
            $("#salary").removeClass("box_error");
            error = false;
        }
    }


    if (!error) {
        if (animation) return false;
        animation = true;

        current_slide = $(this).parent().parent();
        next_slide = $(this).parent().parent().next();

        $("#progress_header li").eq($(".multistep-box1").index(next_slide)).addClass("active");

        next_slide.show();
        current_slide.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_slide.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_slide.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_slide.hide();
                animation = false;
            },
            easing: 'easeInOutBack'
        });
    }

});



// step 3

// bio
$("#bio").keyup(function() {
    var bio = $("#bio").val();
    if (!bio.test($("#bio").val())) {
        $("#error-bio").text('Please Introduce Yourself.');
        $("#bio").addClass("box_error");
        error = true;
    } else {
        $("#error-bio").text('');
        error = false;
        $("#bio").removeClass("box_error");
    }
});

$("#phone").keyup(function() {
    var phone = $("#phone").val();
    if (phone !== phone) {
        $("#error-phone").text('Enter your Phone number.');
        $("#phone").addClass("box_error");
        error = true;
    } else {
        $("#error-phone").text('');
        error = false;
    }
    if (phone.length !== 10) {
        $("#error-phone").text("Mobile number must be of 10 Digits only.");
        $("#phone").addClass("box_error");
        error = true;
    } else {
        $("#phone").removeClass("box_error");
    }
});

// third step validation
$(".ts_next_btn").click(function() {
    // bio
    if ($("#bio").val() === '') {
        $("#error-bio").text('Please Introduce Yourself.');
        $("#bio").addClass("box_error");
        error = true;
    } else {
        var bio = $("#bio").val();
        if (bio !== bio) {
            $("#error-bio").text('Please Introduce Yourself.');
            error = true;
        } else {
            $("#error-bio").text('');
            $("#bio").removeClass("box_error");
            error = false;
        }
    }
    // phone
    if ($("#phone").val() == '') {
        $("#error-phone").text('Enter your Phone number.');
        $("#phone").addClass("box_error");
        error = true;
    } else {
        var phone = $("#phone").val();
        if (phone != phone) {
            $("#error-phone").text('Phone number is required.');
            error = true;
        } else {
            $("#error-phone").text('');
            error = false;
        }
        if (phone.length != 10) {
            $("#error-phone").text("Mobile number must be of 10 Digits only.");
            error = true;
        } else {
            $("#phone").removeClass("box_error");
        }
    }


    if (!error) {
        if (animation) return false;
        animation = true;

        current_slide = $(this).parent().parent();
        next_slide = $(this).parent().parent().next();

        $("#progress_header li").eq($(".multistep-box1").index(next_slide)).addClass("active");

        next_slide.show();
        current_slide.animate({
            opacity: 0
        }, {
            step: function(now, mx) {
                scale = 1 - (1 - now) * 0.2;
                left = (now * 50) + "%";
                opacity = 1 - now;
                current_slide.css({
                    'transform': 'scale(' + scale + ')'
                });
                next_slide.css({
                    'left': left,
                    'opacity': opacity
                });
            },
            duration: 800,
            complete: function() {
                current_slide.hide();
                animation = false;
            },
            easing: 'easeInOutBack'
        });
    }
});
// previous
$(".previous").click(function() {
    if (animation) return false;
    animation = true;

    current_slide = $(this).parent().parent();
    previous_slide = $(this).parent().parent().prev();

    $("#progress_header li").eq($(".multistep-box1").index(current_slide)).removeClass("active");

    previous_slide.show();
    current_slide.animate({
        opacity: 0
    }, {
        step: function(now, mx) {
            scale = 0.8 + (1 - now) * 0.2;
            left = ((1 - now) * 50) + "%";
            opacity = 1 - now;
            current_slide.css({
                'left': left
            });
            previous_slide.css({
                'transform': 'scale(' + scale + ')',
                'opacity': opacity
            });
        },
        duration: 800,
        complete: function() {
            current_slide.hide();
            animation = false;
        },
        easing: 'easeInOutBack'
    });
});

$(".submit_btn").click(function() {
    if (!error){
        $(".main").addClass("form_submited");
    }
    return true;
})


