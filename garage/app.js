var app = angular.module('mainApp', []);

app.controller('mainCtrl', function($scope, $http, $interval) {
    $scope.SensorValue = "";
	
	var intervalObj = $interval(function(){
		$http.get("get_sensor.php").then(function(response){
			$scope.SensorValue = response.data.trim().replace('_',' ');
		});
	}, 200);
	
	$scope.OnOutputClick = function() {
		$http.get("toggle.php");
	};
	
	$scope.toggleClass = function() {
		switch($scope.SensorValue.trim()){
			case 'DOOR CLOSED':
				return 'btn-success';
			case 'DOOR OPEN':
				return 'btn-danger';
			default:
				return 'btn-warning';
		}
	}
});
