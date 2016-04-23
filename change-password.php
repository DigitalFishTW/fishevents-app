<?php include 'php/templates/header.php'; ?>
    
<div class="ui text container">
    <p>&nbsp;</p>
    <div class="ui segment" style="max-width: 350px; margin: 0 auto">
        <h1 class="ui center aligned header">
            Change Password
        </h1>
        <form class="ui form">
            <div class="field">
                <label>Old password</label>
                <input type="password" name="old_password">
            </div>
            <div class="field">
                <label>New password</label>
                <input type="password" name="password">
            </div>
            <div class="field">
                <label>Confirm password</label>
                <input type="password" name="confirm_password">
            </div>
            <div class="ui negative hidden message">
                Both password aren't the same.
            </div>
            <div class="ui positive hidden message">
                Password changed successfully!
            </div>
            <button class="ui fluid blue button" type="submit">CHANGE</button>
        </form>
        <script>
            $('form').on('submit', function(e)
            {
                e.preventDefault()
                
                if($('[name="password"]').val() == $('[name="confirm_password"]').val())
                {
                    $('.negative.message').addClass('hidden')
                    $('.positive.message').addClass('hidden')
        
                    $.ajax({
                        url: 'https://fishevents-api-chown9835.c9users.io/auth/' + $('[name="old_password"]').val() + '?token=' 
                                                                                 + $.cookie('token'),
                        processData: false,
                        contentType: "application/json",
                        data    : JSON.stringify({'new_password': $('[name="password"]').val()}),
                        type    : "PATCH",
                        dataType: 'json',
        
                        success: function(data)
                        {
                            $('.positive.message').removeClass('hidden')
                            $('.negative.message').addClass('hidden')
                        }
                    });
                }
                else
                {
                    $('.positive.message').addClass('hidden')
                    $('.negative.message').removeClass('hidden')
                }
            })
        </script>
    </div>
</div>
    
<?php include 'php/templates/footer.php'; ?>
    