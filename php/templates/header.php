<!DOCTYPE HTML>
<html>
<head>
<title>Fish Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/jquery-cookie.js"></script>
<script src="js/gmaps.js"></script>
<script src="bower_components/angular/angular.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="css/Semantic-UI/dist/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/Semantic-UI/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="bower_components/fast-json-patch/dist/json-patch-duplex.min.js"></script>
<script>
$(function()
{
    //$('.ui.dropdown').dropdown()
    $('[data-href]').on('click', function(e)
    {
        e.preventDefault()
        
        window.location.href = $(this).attr('data-href')
    })
    
    $.fn.serializeObject = function()
    {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
})
</script>
<script>
    var app = angular.module('fishEvents', []);
    app.controller('header', function($scope, $http)
    {
        $http.get('https://fishevents-api-chown9835.c9users.io/username?token=' + $.cookie('token'))
        .then(function(response)
        {
            $scope.username = response.data.username;
        });
    });
</script>
<script>
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/')+1);
    
    if(typeof $.cookie('token') === 'undefined' && (filename != 'signin.php' && filename != 'index.php' && filename != 'signup.php'))
        window.location.href = "signin.php";
</script>
<script>
$(function()
{
    $('.button.sidebar').on('click', function()
    {
        $('aside').animate({width:'toggle'},350);
    })
})
</script>
</head>
<body ng-app="fishEvents">
    
    <?php if($_COOKIE['token']) { ?>
    <!-- 左側選單 -->
    <aside>
        <div class="ui large fluid vertical inverted blue menu">
            <a href="dashboard.php" class="item">
                <i class="icon dashboard"></i>
                Dashboard
            </a>
            <a href="my-tracks.php" class="item">
                <i class="icon flag"></i>
                Tracks
            </a>
            <a href="my-boats.php" class="item">
                <i class="icon anchor"></i>
                Vessels
            </a>
            <a href="my-permits.php" class="item">
                <i class="icon ticket"></i>
                Permits
            </a>
            <a href="my-catch.php" class="item">
                <i class="icon trophy"></i>
                Catch
            </a>
        </div>
    </aside>
    <!-- / 左側選單 -->
    <?php } ?>
    
    <div id="outer">
        
        <!-- 置頂選單 -->
        <nav ng-controller="header">
            <ul>
                <?php if($_COOKIE['token']) { ?>
                <li class="sidebar button">
                    <i class="icon sidebar"></i>
                </li>
                <?php } else {?>
                    <li class="sidebar" style="cursor: inherit;">
                    </li>
                <?php } ?>
                <li class="brand">
                    <a href="/index.php" style="color: #626262;">Fish Events</a>
                </li>
                <li class="right">
                    <div class="ui icon simple dropdown">
                        <?php if($_COOKIE['token']) { ?>
                        <img class="ui avatar image" src="images/fake-avatar.png">
                        <span class="text">{{ username }}</span>
                        <div class="menu" style="right: 0 !important; left: auto !important">
                            <a href="my-account.php" class="item"><i class="icon user"></i>Account settings</a>
                            <a href="#!" class="logout item"><i class="icon sign out"></i>Log out</a>
                        </div>
                        <?php } else { ?>
                        <span class="text">Hi there, sign in here.</span>
                        <div class="menu" style="right: 0 !important; left: auto !important">
                            <a href="signin.php" class="item"><i class="icon sign in"></i>Sign in</a>
                            <a href="signup.php" class="item"><i class="icon add user"></i>Create an account</a>
                        </div>
                        <?php } ?>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- / 置頂選單 -->
        
        <script>
            $('.logout.item').on('click', function()
            {
                $.ajax
                ({
                   url     : 'https://fishevents-api-chown9835.c9users.io/auth?token=' + $.cookie('token'),
                   type    : "DELETE",
                   dataType: 'json',
                   success: function(msg)
                   {
                        $.removeCookie('token');
                        window.location.href = "index.php"
                   }
               });
            })
        </script>
        
        <!-- 主要內容容器 -->
        <section>