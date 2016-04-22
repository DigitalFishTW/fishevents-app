<?php include 'php/templates/header.php'; ?>
    
<div class="ui text container">
    <p>&nbsp;</p>
    <div class="ui grid">
        <div class="sixteen wide column">
            <h1>Dashboard</h1>
        </div>
        
        <div class="eight wide column">
            <div class="ui teal inverted center aligned segment">
                <div class="ui inverted statistic">
                <div class="value">
                    1
                </div>
                <div class="label">
                    Journeys
                </div>
            </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="ui teal inverted center aligned segment">
                <div class="ui inverted statistic">
                <div class="value">
                  14
                </div>
                <div class="label">
                  Journeys
                </div>
            </div>
            </div>
        </div>
        <div class="four wide column">
            <div class="ui green inverted center aligned segment">
                <div class="ui inverted statistic">
                <div class="value">
                  56
                </div>
                <div class="label">
                  Journeys
                </div>
            </div>
            </div>
        </div>
        
        <div class="sixteen wide column">
            <h1>Last journey</h1>
        </div>
        
        <div class="sixteen wide column">
            <div id="map" style="height: 300px"></div>
        </div>
        
        <script>
            $(function()
            {
                new GMaps({
                  div: '#map',
                  lat: -12.043333,
                  lng: -77.028333
                });
            })
        </script>
    </div>
</div>
    
<?php include 'php/templates/footer.php'; ?>
    