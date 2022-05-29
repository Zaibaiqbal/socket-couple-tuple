var current_slide, next_slide, previous_slide;
var left, opacity, scale;
var animation;

var error = false;

// first Step Validation

// first name
$("#first_name").keyup(function() {
    var fname = $("#first_name").val();
    if (fname === '') {
        $("#error-fname").text('Enter your First name.');
        $("#first_name").addClass("box_error");
        error = true;
    } else {
        $("#error-fname").text('');
        error = false;
    }
    if ((fname.length <= 2) || (fname.length > 20)) {
        $("#error-fname").text("User length must be between 5 and 20 Characters.");
        $("#first_name").addClass("box_error");
        error = true;
    }
    if (!isNaN(fname)) {
        $("#error-fname").text("Only Characters are allowed.");
        $("#first_name").addClass("box_error");
        error = true;
    } else {
        $("#first_name").removeClass("box_error");
    }
});

// last name
$("#last_name").keyup(function() {
    var lname = $("#last_name").val();
    if (lname != lname) {
        $("#error-lname").text('Enter your Last name.');
        $("#last_name").addClass("box_error");
        error = true;
    } else {
        $("#error-lname").text('');
        error = false;
    }
    if ((lname.length <= 2) || (lname.length > 20)) {
        $("#error-lname").text("User length must be between 2 and 20 Characters.");
        $("#last_name").addClass("box_error");
        error = true;
    }
    if (!isNaN(lname)) {
        $("#error-lname").text("Only Characters are allowed.");
        $("#last_name").addClass("box_error");
        error = true;
    } else {
        $("#last_name").removeClass("box_error");
    }
});

// Profile For

$("#profile_for").keyup(function() {
    var profile_for = $("#profile_for").val();
    if (profile_for !== profile_for) {
        $("#error-profile_for").text('Please specify whose profile is being created.');
        $("#profile_for").addClass("box_error");
        error = true;
    } else {
        $("#error-profile_for").text('');
        error = false;
        $("#profile_for").removeClass("box_error");
    }
});

// Select Gender

$("#gender").keyup(function() {
    var gender = $("#gender").val();
    if (gender !== gender) {
        $("#error-gender").text('Select Gender.');
        $("#gender").addClass("box_error");
        error = true;
    } else {
        $("#error-gender").text('');
        error = false;
        $("#gender").removeClass("box_error");
    }
});


// Select Religion

$("#religion").keyup(function() {
    var religion = $("#religion").val();
    if (religion !== religion) {
        $("#error-religion").text('Select Religion.');
        $("#religion").addClass("box_error");
        error = true;
    } else {
        $("#error-religion").text('');
        error = false;
        $("#religion").removeClass("box_error");
    }
});

// Community

$("#community").keyup(function() {
    var religion = $("#community").val();
    if (religion !== religion) {
        $("#error-community").text('Please specify Community.');
        $("#community").addClass("box_error");
        error = true;
    } else {
        $("#error-community").text('');
        error = false;
        $("#community").removeClass("box_error");
    }
});



//second step validation

// email validation
$("#email").keyup(function() {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if (!emailReg.test($("#email").val())) {
        $("#error-email").text('Please enter an Email addres.');
        $("#email").addClass("box_error");
        error = true;
    } else {
        $("#error-email").text('');
        error = false;
        $("#email").removeClass("box_error");
    }
});


// dob
$("#dob").keyup(function() {
    var dob = $("#dob").val();
    if (dob !== dob) {
        $("#error-address").text('Enter Date Of Birth.');
        $("#dob").addClass("box_error");
        error = true;
    } else {
        $("#error-address").text('');
        error = false;
        $("#dob").removeClass("box_error");
    }
});


// where do you live

$("#living_in").keyup(function() {
    var living_in = $("#living_in").val();
    if (living_in !== living_in) {
        $("#error-living_in").text('Select Your Country.');
        $("#living_in").addClass("box_error");
        error = true;
    } else {
        $("#error-living_in").text('');
        error = false;
        $("#living_in").removeClass("box_error");
    }
});














// password validation
$("#pass").keyup(function() {
    var pass = $("#pass").val();
    var cpass = $("#cpass").val();

    if (pass != '') {
        $("#error-pass").text('');
        error = false;
        $("#pass").removeClass("box_error");
    }
    if (pass != cpass && cpass != '') {
        $("#error-cpass").text('Password and Confirm Password is not matched.');
        error = true;
    } else {
        $("#error-cpass").text('');
        error = false;
    }
});
// confirm password validation
$("#cpass").keyup(function() {
    var pass = $("#pass").val();
    var cpass = $("#cpass").val();

    if (pass != cpass) {
        $("#error-cpass").text('Please enter the same Password as above.');
        $("#cpass").addClass("box_error");
        error = true;
    } else {
        $("#error-cpass").text('');
        error = false;
        $("#cpass").removeClass("box_error");
    }
});




// first step validation
$(".fs_next_btn").click(function() {
    // first_name
    if ($("#first_name").val() === '') {
        $("#error-fname").text('Enter your First name.');
        $("#first_name").addClass("box_error");
        error = true;
    } else {
        var fname = $("#first_name").val();
        if (fname != fname) {
            $("#error-fname").text('First name is required.');
            error = true;
        } else {
            $("#error-fname").text('');
            error = false;
            $("#first_name").removeClass("box_error");
        }
        if ((fname.length <= 2) || (fname.length > 20)) {
            $("#error-fname").text("User length must be between 2 and 20 Characters.");
            error = true;
        }
        if (!isNaN(fname)) {
            $("#error-fname").text("Only Characters are allowed.");
            error = true;
        } else {
            $("#first_name").removeClass("box_error");
        }
    }

    // last name
    if ($("#last_name").val() === '') {
        $("#error-lname").text('Enter your Last name.');
        $("#last_name").addClass("box_error");
        error = true;
    } else {
        var lname = $("#last_name").val();
        if (lname != lname) {
            $("#error-lname").text('Last name is required.');
            error = true;
        } else {
            $("#error-lname").text('');
            error = false;
        }
        if ((lname.length <= 2) || (lname.length > 20)) {
            $("#error-lname").text("User length must be between 2 and 20 Characters.");
            error = true;
        }
        if (!isNaN(lname)) {
            $("#error-lname").text("Only Characters are allowed.");
            error = true;
        } else {
            $("#last_name").removeClass("box_error");
        }
    }


    // profile For

    if ($("#profile_for").val() === '') {
        $("#error-profile_for").text('Please specify whose profile is being created.');
        $("#profile_for").addClass("box_error");
        error = true;
    } else {
        var profile_for = $("#profile_for").val();
        if (profile_for !== profile_for) {
            $("#error-profile_for").text('Please specify whose profile is being created.');
            error = true;
        } else {
            $("#profile_for").removeClass("box_error");
        }

    }

    // select Gender

    if ($("#gender").val() === '') {
        $("#error-gender").text('Select Your Gender.');
        $("#gender").addClass("box_error");
        error = true;
    } else {
        var gender = $("#gender").val();
        if (gender !== gender) {
            $("#error-gender").text('Select Gender.');
            error = true;
        } else {
            $("#gender").removeClass("box_error");
        }

    }


    if ($("#religion").val() === '') {
        $("#error-religion").text('Select Religion.');
        $("#religion").addClass("box_error");
        error = true;
    } else {
        var religion = $("#religion").val();
        if (religion !== religion) {
            $("#error-religion").text('Select Your Religion.');
            error = true;
        } else {
            $("#religion").removeClass("box_error");
        }

    }

    // community

    if ($("#community").val() === '') {
        $("#error-community").text('Please specify Community.');
        $("#community").addClass("box_error");
        error = true;
    } else {
        var community = $("#community").val();
        if (community !== community) {
            $("#error-community").text('Please specify Community.');
            error = true;
        } else {
            $("#community").removeClass("box_error");
        }

    }

    // animation
    if (!error) {
        if (animation) return false;
        animation = true;

        current_slide = $(this).parent().parent();
        next_slide = $(this).parent().parent().next();

        $("#progress_header li").eq($(".multistep-box").index(next_slide)).addClass("active");

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


// third step validation
$(".ts_next_btn").click(function() {
    // email
    if ($("#email").val() == '') {
        $("#error-email").text('Please enter an email address.');
        $("#email").addClass("box_error");
        error = true;
    } else {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        if (!emailReg.test($("#email").val())) {
            $("#error-email").text('Please insert a valid email address.');
            error = true;
        } else {
            $("#error-email").text('');
            $("#email").removeClass("box_error");
        }
    }

    // address
    if ($("#dob").val() === '') {
        $("#error-dob").text('Enter Your Date of Birth.');
        $("#dob").addClass("box_error");
        error = true;
    } else {
        var dob = $("#dob").val();
        if (dob !== dob) {
            $("#error-dob").text('Date of Birth is required.');
            error = true;
        } else {
            $("#error-dob").text('');
            $("#dob").removeClass("box_error");
            error = false;
        }
    }

    // Where You Live validaton
    if ($("#living_in").val() === '') {
        $("#error-living_in").text('Select Your Country.');
        $("#living_in").addClass("box_error");
        error = true;
    } else {
        var living_in = $("#living_in").val();
        if (living_in !== living_in) {
            $("#error-living_in").text('Select Your Country.');
            error = true;
        } else {
            $("#living_in").removeClass("box_error");
        }

    }

    // password validation
    $("#pass").keyup(function() {
        var pass = $("#pass").val();
        var cpass = $("#cpass").val();

        if (pass != '') {
            $("#error-pass").text('');
            error = false;
            $("#pass").removeClass("box_error");
        }
        if (pass != cpass && cpass != '') {
            $("#error-cpass").text('Password and Confirm Password is not matched.');
            error = true;
        } else {
            $("#error-cpass").text('');
            error = false;
        }
    });
// confirm password validation
    $("#cpass").keyup(function() {
        var pass = $("#pass").val();
        var cpass = $("#cpass").val();

        if (pass != cpass) {
            $("#error-cpass").text('Please enter the same Password as above.');
            $("#cpass").addClass("box_error");
            error = true;
        } else {
            $("#error-cpass").text('');
            error = false;
            $("#cpass").removeClass("box_error");
        }
    });


    // password
    if ($("#pass").val() == '') {
        $("#error-pass").text('Please enter a password.');
        $("#pass").addClass("box_error");
        error = true;
    }
    if ($("#cpass").val() == '') {
        $("#error-cpass").text('Please enter a Confirm password.');
        $("#cpass").addClass("box_error");
        error = true;
    } else {
        var pass = $("#pass").val();
        var cpass = $("#cpass").val();

        if (pass != cpass) {
            $("#error-cpass").text('Please enter the same password as above.');
            error = true;
        } else {
            $("#error-cpass").text('');
            $("#pass").removeClass("box_error");
            $("#cpass").removeClass("box_error");
        }
    }

    if (!error) {
        if (animation) return false;
        animation = true;

        current_slide = $(this).parent().parent();
        next_slide = $(this).parent().parent().next();

        $("#progress_header li").eq($(".multistep-box").index(next_slide)).addClass("active");

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

    $("#progress_header li").eq($(".multistep-box").index(current_slide)).removeClass("active");

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

