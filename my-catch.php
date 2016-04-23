<?php include 'php/templates/header.php'; ?>
    
<div class="ui text container" ng-controller="myCatch">
    <p>&nbsp;</p>
    <div class="ui grid">
        <div class="eight wide column">
            <h1>My catch</h1>
        </div>
        <div class="eight wide column">
            <button data-href="add-catch.php" class="ui labeled icon right floated blue button">
                <i class="add icon"></i>
                New catch
            </button>
        </div>
    
        <div class="sixteen wide column">
            
          
            <div class="ui cards">
              <div class="ui centered card" ng-repeat="data in datas">
                <div class="content">
                  <div class="header">
                    {{ data.date }}
                  </div>
                  <!--<div class="meta">
                    {{ data.year }}
                  </div>-->
                </div>
                <div class="extra content">
                    <a href="add-catch.php?id={{ data._id }}" class="ui teal fluid button">
                        Edit
                        <i class="right chevron icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <script>
        app.controller('myCatch', function($scope, $http)
        {
            $http.get('https://fishevents-api-chown9835.c9users.io/catch?token=' + $.cookie('token') + '&offset=0&limit=20')
            .then(function(response)
            {
                $scope.datas = response.data;
            });
        });
        </script>
        
    </div>
</div>
    
<?php include 'php/templates/footer.php'; ?>
    