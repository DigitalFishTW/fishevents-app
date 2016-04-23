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
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<script src="css/Semantic-UI/dist/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/Semantic-UI/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script>
$(function()
{
    $('.ui.dropdown').dropdown()
    
    $('[data-href]').on('click', function(e)
    {
        e.preventDefault()
        
        window.location.href = $(this).attr('data-href')
    })
})
    
</script>
</head>
<body ng-app="fishEvents">
    <!-- 左側選單 -->
    <aside>
        <div class="ui large fluid vertical inverted blue menu">
            <a href="dashboard.php" class="item">
                <i class="icon dashboard"></i>
                Dashboard
            </a>
            <a class="item">
                <i class="icon flag"></i>
                Journeys
            </a>
            <a href="my-boats.php" class="item">
                <i class="icon anchor"></i>
                My boats
            </a>
            <a href="catch.php" class="item">
                <i class="icon trophy"></i>
                Catch
            </a>
            <a class="item">
                Identifiers
            </a>
        </div>
    </aside>
    <!-- / 左側選單 -->
    
    <div id="outer">
        
        <!-- 置頂選單 -->
        <nav>
            <ul>
                <li>
                    <i class="icon sidebar"></i>
                </li>
                <li class="brand">
                    Fish Events
                </li>
                <li class="right">
                    <div class="ui icon dropdown">
                        <img class="ui avatar image" src="images/fake-avatar.png">
                        <span class="text">Yami Odymel</span>
                        <div class="menu">
                            <a href="my-account.php" class="item"><i class="icon user"></i>Account settings</a>
                            <a href="logout.php" class="item"><i class="icon sign out"></i>Log out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- / 置頂選單 -->
        
        
        <!-- 主要內容容器 -->
        <section>