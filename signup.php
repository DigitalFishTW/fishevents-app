<?php include 'php/templates/header.php'; ?>
<?php include 'php/templates/jumbotron.php'; ?>
<p>&nbsp;</p>
<div class="ui text container">
    <div class="ui segment" style="max-width: 350px; margin: 0 auto">
        <div></div>
        <h1 class="ui center aligned header" style="color: #585858">
            Create an account
            <div class="sub header" style="color: #989898">Hello! Welcome come to join us!</div>
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
            <div class="ui negative hidden message">
                Username or password was incorrect.
            </div>
            <button class="ui fluid blue button" type="submit">Sign up</button>
            <br>
            <button class="ui fluid button" type="submit" data-href="signin.php">I already have an account</button>
        </form>
        <script>
        $('form').on('submit', function(e)
        {
            e.preventDefault()
            $('.negative.message').addClass('hidden')
            
            $.ajax({
                url: 'https://fishevents-api-chown9835.c9users.io/auth',
                data: {
                        'username': $('[name="username"]').val(), 
                        'password': $('[name="password"]').val()
                },
                type    : "PUT",
                dataType: 'json',

                success: function(msg)
                {
                    window.location.href = "my-account.php?welcome=true"
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
    