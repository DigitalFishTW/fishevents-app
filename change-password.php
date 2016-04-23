<?php include 'php/templates/header.php'; ?>
    
<div class="ui text container">
    <p>&nbsp;</p>
    <div class="ui segment" style="max-width: 350px; margin: 0 auto">
        <h1 class="ui center aligned header">
            Change Password
        </h1>
        <form class="ui form">
            <div class="field">
                <label>Current password</label>
                <input type="text" name="current_password">
            </div>
            <div class="field">
                <label>New password</label>
                <input type="text" name="password">
            </div>
            <div class="field">
                <label>Confirm password</label>
                <input type="text" name="confirm_password">
            </div>
            <div class="ui negative hidden message">
                Username or password was incorrect.
            </div>
            <button class="ui fluid teal button" type="submit">Sign in</button>
        </form>
        <script>
        $('form').on('submit', function(e)
        {
            e.preventDefault()
            $('.negative.message').addClass('hidden')
            
            
            
            $.ajax({
                url: 'http://fishevents-api-chown9835.c9users.io/auth/',
                data: {
                            'username': $('[name="username"]').val(), 
                            'password': $('[name="password"]').val()
                },
                type    : "GET",
                dataType: 'json',

                success: function(data)
                {
                    $.cookie('token', data.token);
                    $('.negative.message').addClass('hidden')
                },
                 error: function(xhr, ajaxOptions, thrownError)
                 { 
                    $('.negative.message').removeClass('hidden')
                 }
            });
        })
        </script>
    </div>
</div>
    
<?php include 'php/templates/footer.php'; ?>
    