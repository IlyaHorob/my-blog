$(document).ready(function () {
    $('.modal-save').click(function () {
        $.ajax({
            type: "POST",
            url: 'http://my-blog.loc/handler.php',
            data: {
                'name': 'john',
                'email': 'john@test.com'
            },
            success: function (response) {
                alert(response.name);
            },
            fail: function () {
                alert('Fail');
            },
            dataType: 'json'
        });
    });
});
