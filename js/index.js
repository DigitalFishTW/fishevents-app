var fishApp = angular.module('digitalFish', []);

fishApp.controller('FishApp', function ($scope) {
    $scope.mode = 0;
    
    $scope.types = [
        {
            name: 'Fisherman',
            description: 'A fisherman or fisher is someone who captures fish and other animals from a body of water.',
            icon: 'images/icons/fisherman.svg',
            id: 'fisherman'
        },
        {
            name: 'Boat owner',
            description: 'A fisherman or fisher is someone who captures fish and other animals from a body of water.',
            icon: 'images/icons/boat-owner.svg',
            id: 'owner'
        },
        {
            name: 'Researcher',
            description: 'A fisherman or fisher is someone who captures fish and other animals from a body of water.',
            icon: 'images/icons/researcher.svg',
            id: 'researcher'
        },
        {
            name:'Gov',
            description: 'A fisherman or fisher is someone who captures fish and other animals from a body of water.',
            icon: 'images/icons/gov.svg',
            id: 'gov'
        }
    ]
    var types = {
        'add-track': {
            name: 'Add Track',
            id: 'add-track'
        },
        'add-good': {
            name: 'Add Good',
            id: 'add-good'
        },
        'add-identifier': {
            name: 'Add identifier',
            id: 'add-identifier'
        },
        'add-boat': {
            name: 'Add boat',
            id: 'add-boat'
        },
        'all-tracks': {
            name: 'All Tracks',
            id: 'all-tracks'
        },
        'my-tracks': {
            name: 'My Tracks',
            id: 'my-tracks'
        },
        'admin/good': {
            name: 'Manager goods',
            id: 'admin-good'
        },
        'admin/identifier': {
            name: 'Manager identifier',
            id: 'admin-identifier'
        },
    }
    $scope.actions = {
        'fisherman': [
            types['add-track'],
            types['my-tracks'],
            types['add-good'],
            types['add-identifier']
            
        ],
        'owner': [
            types['add-identifier'],
            types['add-boat']
        ],
        'researcher': [
            types['add-good'],
            types['all-tracks']
        ],
        'gov': [
            types['admin/good'],
            types['admin/identifier']
        ],
    }
    $scope.currentActionList = null;
    $scope.currentAction = null;
    
    $scope.handleClickPerson = function (type) {
        // alert('you clicked type ' + type);
        $scope.mode = 1;
        $scope.currentActionList = $scope.actions[type]
        // console.log($scope.currentAction)
    }
    $scope.handleClickAction = function (action) {
        // alert('you clicked type ' + type);
        $scope.mode = 2;
        $scope.currentAction = action;
        // console.log($scope.currentAction)
    }
    $scope.back = function () {
        $scope.managerPage = null;
        $scope.mode--;
    }
});

fishApp.directive('dynamic', function ($compile) {
  return {
    restrict: 'A',
    // replace: true,
    link: function (scope, ele, attrs) {
        if (attrs.dynamic) {
            ele.html('<div ' + attrs.dynamic +' ></div>');
            $compile(ele.contents())(scope);
        }
        attrs.$observe('dynamic', function(html) {
            // alert('test')
            if (!attrs.dynamic) return;
            ele.html('<div ' + attrs.dynamic +' ></div>');
            $compile(ele.contents())(scope);
        });
    }
  };
});


fishApp.directive('adminGood', function() {
    return {
        controller: ['$scope', function($scope) {
            // alert('test');
          }
        ],
        templateUrl: 'templates/admin/good.html'
    };
})


fishApp.directive('adminIdentifier', function() {
    return {
        controller: ['$scope', function($scope) {
            // alert('test');
          }
        ],
        templateUrl: 'templates/admin/identifier.html'
    };
})


fishApp.directive('addBoat', function() {
    return {
        controller: ['$scope', function($scope) {
            // alert('test');
          }
        ],
        templateUrl: 'templates/add-boat.html'
    };
})

fishApp.directive('addGood', function() {
    return {
        controller: ['$scope', function($scope) {
            // alert('test');
          }
        ],
        templateUrl: 'templates/add-good.html'
    };
})

fishApp.directive('addIdentifier', function() {
    return {
        controller: ['$scope', function($scope) {
            // alert('test');
          }
        ],
        templateUrl: 'templates/add-identifier.html'
    };
})
fishApp.directive('addTrack', function() {
    return {
        controller: ['$scope', function($scope) {
            // alert('test');
          }
        ],
        templateUrl: 'templates/add-track.html'
    };
})
fishApp.directive('allTracks', function() {
    return {
        controller: ['$scope', function($scope) {
            // alert('test');
          }
        ],
        templateUrl: 'templates/all-tracks.html'
    };
})
fishApp.directive('myTracks', function() {
    return {
        controller: ['$scope', function($scope) {
            // alert('test');
          }
        ],
        templateUrl: 'templates/my-tracks.html'
    };
})