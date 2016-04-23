<?php include 'php/templates/header.php'; ?>
    
<div class="ui text container" ng-controller="myPermits">
    <p>&nbsp;</p>
    <div class="ui grid">
        <div class="eight wide column">
            <h1>My permits</h1>
        </div>
        <div class="eight wide column">
            <button data-href="add-permit.php" class="ui labeled icon right floated blue button">
                <i class="add icon"></i>
                New permits
            </button>
        </div>
    
        <div class="sixteen wide column">
            
          
            <div class="ui cards">
              <div class="ui centered card" ng-repeat="data in datas">
                <div class="content">
                  <div class="header">
                    {{ data.id }}
                  </div>
                  <!--<div class="meta">
                    {{ data.year }}
                  </div>-->
                </div>
                <div class="extra content">
                    <a href="add-permit.php?id={{ data._id }}" class="ui teal fluid button">
                        Edit
                        <i class="right chevron icon"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <script>
        app.controller('myPermits', function($scope, $http)
        {
            $http.get('https://fishevents-api-chown9835.c9users.io/permit?token=' + $.cookie('token'))
            .then(function(response)
            {
                $scope.datas = response.data;
            });
        });
        </script>
        
    </div>
</div>
    
<?php include 'php/templates/footer.php'; ?>
    