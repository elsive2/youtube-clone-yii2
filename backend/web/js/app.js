$(document).ready(function() {
    $('#video-file').change(() => {
        $(this).closest('form').trigger('submit');
    })
})

alert(1);