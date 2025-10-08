jQuery(document).ready(function($) {
    $(document).on('click', '#pagination a.page-numbers', function(e) {
        e.preventDefault();

        var page = $(this).text(); // Get the page number from the clicked link

        $.ajax({
            url: ajaxpagination.ajaxurl,
            type: 'post',
            data: {
                action: 'ajax_pagination',
                page: page
            },
            beforeSend: function() {
                $('#table-row-container').html('<p>Loading...</p>');
            },
            success: function(response) {
                $('#table-row-container').html(response);
            }
        });
    });
});
