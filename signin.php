<?php include 'php/templates/header.php'; ?>
<?php include 'php/templates/jumbotron.php'; ?>
<p>&nbsp;</p>
<div class="ui text container">
    <div class="ui segment" style="max-width: 350px; margin: 0 auto">
        <div></div>
        <h1 class="ui center aligned header" style="color: #585858">
            Welcome Back!
            <div class="sub header" style="color: #989898">We're always here.</div>
        </h1>
        <form class="ui form">
            <div class="field">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="field">
              <label>Password</label>
              <input type="password" name="password">
            </div>
            <?php if(isset($_GET['needed'])) { ?>
            <div class="ui negative hidden message">
                Username or password was incorrect.
            </div>
            <?php } ?>
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
            
            $('.positive.button').addClass('loading').attr('disabled', 'disabled')
            $('.negative.message').addClass('hidden')
            
            $.ajax({
                url: 'https://fishevents-api-chown9835.c9users.io/auth?username=' + $('[name="username"]').val() + '&password=' 
                                                                                  + $('[name="password"]').val(),
                type    : "GET",
                dataType: 'json',

                success: function(data)
                {
                    $.cookie('token', data.token);
                    $('.negative.message').addClass('hidden')
                    $('.positive.button').removeClass('loading')
                                        .text('Signed in successfully!')
                    window.location.href = "my-account.php"
                },
                 error: function(xhr, ajaxOptions, thrownError)
                 { 
                     $('.positive.button').removeClass('loading')
                                          .removeAttr('disabled')
                    $('.negative.message').removeClass('hidden')
                 }
            });
        })
        </script>
    </div>
</div>
    
<?php include 'php/templates/footer.php'; ?>