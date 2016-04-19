$(document).ready(function () {
    $('body').on('click', '#apply', function (e) {
        var that = $(this);
        e.preventDefault();
        var project = $(this).data('project-id');
        $.ajax({
            url: base_url + "projects/apply",
            type: 'POST',
            dataType: 'json',
            data: {
                project: project,
            },

            success: function (response) {
                if (response == true) {
                    $('.msg-apply').text('Успешно кандидатства');
                }
                if (response == false) {
                    $('.msg-apply').text('Вече си кандидатствал');
                }
            },
            error: function (error) {
                console.log("Error");
            }

        });
    });
    // var posts = $('.project-box');
    // posts.hide();
    $('body').on('change', '#cat', function (e) {
$('html, body').animate({ scrollTop: $(this).offset().top }, 500);
        // console.log( );
        var customType = $(this).val();
        if (customType == 'all') {
            $('.project-box').each(function () {
                var data = $(this).data('cat');
                // If equal = show

                    $(this).show(500, function () {
                    });  //show the matched element

            });
        } else {


            $('.project-box').each(function () {
                var data = $(this).data('cat');
                // If equal = show
                if (data == customType) {

                    $(this).show(500, function () {
                    });  //show the matched element
                } else {
                    $(this).hide(500, function () {
                    });  //show the matched element
                }
            });
        }
    });

});