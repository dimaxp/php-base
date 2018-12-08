jQuery(document).ready(function () {
    'use strict';

    jQuery('form').submit(
        function (event) {
            event.preventDefault();

            let form_data = new FormData(this);
            jQuery.ajax({
                url: 'account.php',
                type: 'post',
                data: form_data,
                processData: false,
                contentType: false,
                success: function (response) {
                    console.log(response);
                },
                error: function (err) {
                    console.log("err", err);
                }
            });
        }
    );
});