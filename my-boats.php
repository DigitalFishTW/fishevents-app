<?php include 'php/templates/header.php'; ?>
    
<div class="ui text container" ng-controller="myBoats">
    <p>&nbsp;</p>
    <div class="ui grid">
        <div class="eight wide column">
            <h1>My vessels</h1>
        </div>
        <div class="eight wide column">
            <button data-href="add-boat.php" class="ui labeled icon right floated blue button">
                <i class="add icon"></i>
                New vessel
            </button>
        </div>
    
        <div class="sixteen wide column">
            
          
          
            <div class="ui divided items">
                <div class="item">
                    <div class="content">
                        <a class="header">My Neighbor Totoro</a>
                        <div class="meta">
                            <span class="cinema">IFC Cinema</span>
                        </div>
                        <div class="extra">
                          <div class="ui teal button">
                              Edit
                              <i class="right chevron icon"></i>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="content">
                        <div class="header">Arrowhead Valley Camp</div>
                        <div class="meta">
                            <button class="ui button">Edit</button>
                        </div>
                        <div class="description">
                            <p></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script>
        var app = angular.module('fishEvents', []);
        app.controller('myBoats', function($scope, $http)
        {
            $http.get('https://fishevents-api-chown9835.c9users.io/vessel?token=' + $.cookie('token'))
            .then(function(response)
            {
                $scope.myWelcome = response.data;
            });
        });
        </script>
        
    </div>
</div>
    
<?php include 'php/templates/footer.php'; ?>
    