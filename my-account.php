<?php include 'php/templates/header.php'; ?>
    
<div class="ui text container">
    <p>&nbsp;</p>
    <div class="ui grid">
        <div class="sixteen wide column">
            <h2 class="ui header">
                <i class="user icon"></i>
                <div class="content">
                    Account settings
                </div>
            </h2>
        </div>
        
        <div class="sixteen wide column">
            <div class="ui cards">
                <a href="profile.php?edit=true" class="link card">
                    <div class="content">
                        <div class="header"><i class="edit icon"></i>Edit profile</div>
                        <div class="description">
                            I wanna edit my profile.
                        </div>
                    </div>
                </a>
                <a href="change-password.php" class="link card">
                    <div class="content">
                        <div class="header"><i class="lock icon"></i>Change password</div>
                        <div class="description">
                            I wanna change my old password to a new password.
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
    
<?php include 'php/templates/footer.php'; ?>
    