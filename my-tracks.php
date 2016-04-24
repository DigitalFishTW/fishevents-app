<?php include 'php/templates/header.php'; ?>
    
<div class="ui text container" ng-controller="myTracks">
    <p>&nbsp;</p>
    <div class="ui grid">
        <div class="eight wide column">
            <h1>My tracks</h1>
        </div>
        <div class="eight wide column">
            <button data-href="add-track.php" class="ui labeled icon right floated blue button">
                <i class="add icon"></i>
                New track
            </button>
        </div>
    
        <div class="sixteen wide column">
            
          
            <div class="ui cards">
              <div class="ui centered card" ng-repeat="data in datas">
                <div class="content">
                  <div class="header">
                    {{ data.start_at | date:'yyyy-mm-dd' }}
                  </div>
                  <div class="meta">
                    <span ng-if="data.start_at == data.end_at">
                      It ended up at the same day.
                    </span>
                    <span ng-if="data.start_at != data.end_at">
                      {{ data.start_at | date:'yyyy-mm-dd' }}
                    </span>
                    
                  </div>
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
        app.controller('myTracks', function($scope, $http)
        {
            $scope.date = new Date();
            
            $http.get('https://fishevents-api-chown9835.c9users.io/track?token=' + $.cookie('token') + '&offset=0&limit=30?token=')
            .then(function(response)
            {
                $scope.datas = response.data;
            });
        });
        </script>
        
    </div>
</div>
    
<?php include 'php/templates/footer.php'; ?>
    