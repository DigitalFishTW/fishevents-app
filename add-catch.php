<?php include 'php/templates/header.php'; ?>

<script>
app.controller('addCatch', function($scope, $http, $window)
{
    $http.get('https://fishevents-api-chown9835.c9users.io/catch/<?= $_GET['id']; ?>?token=' + $.cookie('token'))
    .then(function(response)
    {
        <?php if(isset($_GET['id'])) { ?>
        $scope.data = response.data;
         <?php } ?>
    });
   
});
</script>

<div class="ui text container" ng-controller="addCatch">
    <p>&nbsp;</p>
    <div class="ui segment" style="max-width: 550px; margin: 0 auto">
        <h1 class="ui center aligned icon header">
            <i class="trophy icon"></i>
            Catch
            <div class="sub header">Add your gifts here.</div>
        </h1>
        <form class="ui form">
            <h2 class="ui dividing header">Profile</h2>
            <div class="fields">
                <div class="four wide field">
                    <label>Weight</label>
                    <div class="ui input">
                        <input type="text" name="weight" value="{{ data.weight }}" placeholder="Weight">
                    </div>
                </div>
                <div class="four wide field">
                    <label>Amount</label>
                    <div class="ui input">
                        <input type="text" name="counts" value="{{ data.counts }}" placeholder="Amount">
                    </div>
                </div>
                <div class="four wide field">
                    <label>Pricing</label>
                    <div class="ui input">
                        <input type="text" name="pricing" value="{{ data.pricing }}" placeholder="Pricing">
                    </div>
                </div>
                <div class="four wide field">
                    <label>For Sell</label>
                    <div class="ui toggle checkbox">
                        <input type="checkbox" name="selling" ng-checked="{{ data.selling == "on" }}">
                        <label></label>
                    </div>
                </div>
            </div>
            <div class="fields">
                <div class="four wide field">
                    <label>Sold</label>
                    <div class="ui input">
                        <input type="text" name="sold" value="{{ data.sold }}" placeholder="Sold amount">
                    </div>
                </div>
                <div class="twelve wide field" ng-controller="myPermits">
                    <label>Permit ID</label>
                    <div class="ui fluid search selection dropdown">
                      <input type="hidden" name="permit">
                      <i class="dropdown icon"></i>
                      <div class="default text">Select Permit ID</div>
                      <div class="menu">
                          <div class="item" ng-repeat="data in datas" data-value="{{data._id}}">{{data._id}}</div>
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
            <button class="ui fluid positive button" type="submit">Add</button>
        </form>
    </div>
    <p>&nbsp;</p>
    <script>
    $(function()
    {
        //var data  = $('form').serializeObject();

        $('form').on('submit', function()
        {
            var data = 
            {
                total : {
                            weight: $('input[name="weight"]').val(),
                            counts: $('input[name="counts"]').val()
                        },
                selling: $('input[name="selling"]').val(),
                permit : $('input[name="permit"]').val(),
                species: {
                            profile: 'dkdkelrkdorkdorkdorkelek',
                            weight : $('input[name="weight"]').val(),
                            sold   : $('input[name="sold"]').val(),
                            pricing: $('input[name="pricing"]').val(),
                        }
            }
        
        

           $.ajax({
               url     : 'https://fishevents-api-chown9835.c9users.io/catch?token=' + $.cookie('token'),
               contentType: 'application/json',
               data    : JSON.stringify(data),
               type    : "PUT",
               dataType: 'json',
               success: function(msg)
               {
                    
               },
                error: function(xhr, ajaxOptions, thrownError)
                { 

                }
           });
        })
        
    })
        
    </script>
</div>
    
<?php include 'php/templates/footer.php'; ?>
    