<!DOCTYPE HTML>
<html>
<head>
<title>Fish Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/gmaps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="css/Semantic-UI/dist/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/Semantic-UI/dist/semantic.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
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
<body>
    <!-- 左側選單 -->
    <aside>
        <div class="ui large fluid vertical inverted blue menu">
            <a class="item">
                <i class="icon dashboard"></i>
                Dashboard
            </a>
            <a class="item">
                <i class="icon flag"></i>
                Journeys
            </a>
            <a class="item">
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
                    <div class="ui floating labeled icon dropdown">
                        <img class="ui avatar image" src="images/fake-avatar.png">
                        <span class="text">Yami Odymel</span>
                        <div class="left menu">
                        <div class="item">
                          <i class="dropdown icon"></i>
                          <span class="text">Left</span>
                          <div class="menu">
                            <div class="item">
                              <i class="dropdown icon"></i>
                              <span class="text">Still Left</span>
                              <div class="menu">
                                <div class="item">1</div>
                                <div class="item">2</div>
                                <div class="item">3</div>
                              </div>
                            </div>
                            <div class="item">2</div>
                            <div class="item">3</div>
                          </div>
                        </div>
                        <div class="item">
                          <i class="dropdown icon"></i>
                          <span class="text">Left 2</span>
                          <div class="menu">
                            <div class="item">1</div>
                            <div class="item">2</div>
                            <div class="item">3</div>
                          </div>
                        </div>
                      </div>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- / 置頂選單 -->
        
        
        <!-- 主要內容容器 -->
        <section>