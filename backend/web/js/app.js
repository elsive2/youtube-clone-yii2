$(document).ready(function() {
    $('#video-file').change(() => {
        $('#video-file-form').trigger('submit');
    })
})