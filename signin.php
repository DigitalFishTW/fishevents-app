<?php include 'php/templates/header.php'; ?>
    
<div class="ui text container">
    <p>&nbsp;</p>
    <div class="ui segment" style="max-width: 350px; margin: 0 auto">
        <img class="ui small centered image" src="images/logo.png">
        <h1 class="ui center aligned header">
            Welcome Back!
            <div class="sub header">We're always here.</div>
        </h1>
        <form class="ui form">
            <div class="field">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="field">
              <label>Password<a href="user/forgot-password.php" style="float: right">Forgot password?</a></label>
              <input type="password" name="password">
            </div>
            <div class="ui negative hidden message">
                Username or password was incorrect.
            </div>
            <button class="ui fluid positive button" type="submit">Sign in</button>
            <br>
            <button class="ui fluid button" data-href="signup.php">Create an account</button>
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
                dataType:'text',

                success: function(msg)
                {
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
    