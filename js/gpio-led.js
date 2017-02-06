var APIURL = "api";

var app = angular.module("colorsApplication", []);

app.controller("colorsController", ["$scope", "$http", function($scope, $http) {
	$scope.colors = {
		"current": "w3-lime", /** as in body tag */
		"available": [], // @see colors-available.php
		"choose": function(color)
		{
			$http({
				method : "POST",
				url : APIURL+"/set-color.php",
				data: {
					"color": color,
				},
				headers: {"Content-Type": "application/x-www-form-urlencoded"},
			}).then(function mySuccess(response) {
				$scope.colors.current = color.class;
				// success
				console.log(response);
			}, function myError(response) {
				console.log(response.data);
			});
		},
		"init": function()
		{
			$http({
				method : "POST",
				url : APIURL+"/colors-available.php",
				data: {
				},
				headers: {"Content-Type": "application/x-www-form-urlencoded"},
			}).then(function mySuccess(response) {
				$scope.colors.available = response.data;
			}, function myError(response) {
				// error reading available colors
				// console.log(response.data);
			});
		},
	};
	
	$scope.colors.init();
}]);
