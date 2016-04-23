<?php include 'php/templates/header.php'; ?>
    
<div class="ui text container">
    <p>&nbsp;</p>
    <div class="ui grid">
        
        <?php if(isset($_GET['welcome'])) { ?>
        <div class="sixteen wide column">
            <h2 class="ui icon center aligned teal header">
                <i class="child icon"></i>
                <div class="content">
                    Yeah! Thanks for join us!
                </div>
                <div class="sub header">
                    In this place, you can describe who you are, or what kind of the boat you have.
                </div>
            </h2>
        </div>
        <?php } ?>
        
        <div class="sixteen wide column">
            <h2 class="ui teal header">
                <i class="user icon"></i>
                <div class="content">
                    Account settings
                </div>
            </h2>
        </div>
        
        <div class="sixteen wide column">
            <div class="ui teal cards">
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
    