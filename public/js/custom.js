
function formSubmit(event, obj,form_id) {

event.preventDefault();

swal({
        title: "Are you sure ?",

        showCancelButton: true,

        text: 'You want to ' + $(obj).attr("content"),

        icon: "warning",

        dangerMode: true,

        buttons: true,

    })
    .then((willDelete) => {

        if (willDelete) {

            var obj = $(form_id);

            var form = document.querySelector(form_id) // Find the <form> element

            var formData = new FormData(form); // Wrap form contents

            var route = obj.attr('action');
            showLoader();

            $.ajax({

                url: route,

                type: obj.attr('method'),

                data: formData,

                dataType: "json",

                contentType: false,

                cache: false,

                processData: false,

                success: function(result) {

                    if (result.status) {
                        // messageToaster('success', result.message, 'Success');

                        
                        $(form_id)[0].reset();
     
                    } else {

                        // messageToaster('error', result.message, 'Failed');

                    }


                    // removeLoader();
                },
                error: function(result) {
                    ajax_show_error(result);

                    // removeLoader();
                }
            });

        } else {
            swalMessage("Info!", "Request Canceled!", 'info');
        }
    });

}
