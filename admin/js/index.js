$(function() {
    var $form = $('#login-form');

    $form.find('input:first').focus();

    // form validation
    $form.validate({
        rules: {
            username: 'required',
            password: 'required'
        },
        submitHandler: function(form) {
            $admin.showModal();

            var $val = {login: true, username: $('#username').val(), password: $('#password').val()};
            $.post('index.php', $val, function($res) {
                $admin.hideModal();
                if ($res == '') {
                    window.location = 'admin.php';
                } else {
                    alert($res);
                }
            });
        }
    });
});
