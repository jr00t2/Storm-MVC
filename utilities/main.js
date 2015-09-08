app.controller('sign_up', function ($scope, $http) {
/*
* This method will be called on click event of button.
* Here we will read the email and password value and call our PHP file.
*/

//This code calls a function that is in the scope of the signup controller e.g. login / register
//$interval( function(){ $scope.login(); }, 10);
//Interesting for Chat for example
//$scope.count = 0;
$scope.login = function () {

document.getElementById("message").textContent = "";
	if($scope.email && $scope.password) {
		var request = $http({
			method: "post",
			url: window.location.href + "login",
			data: {
				email: $scope.email,
				password: $scope.password
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
		});

		/* Check whether the HTTP Request is successful or not. */
		request.success(function (data) {
			if(data == 1) {
					document.getElementById("message").textContent = "You have login successfully with the email "+ $scope.email;
				} else {
					document.getElementById("message").textContent = "Sorry, Username or Password wrong" +data;
				}
		});
	}
	else {
		document.getElementById("message").textContent = "You didn't Enter a Username or Password";
	}	
} //end of function login

$scope.register = function () {
	if($scope.email && $scope.password) {
		var request = $http({
			method: "post",
			url: window.location.href + "register",
			data: {
				email: $scope.email,
				password: $scope.password
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
		});
		request.success(function (data) {
				if(data == 1) {
					document.getElementById("message").textContent = "You have registered successfully with the email "+ $scope.email;
				} else {
					document.getElementById("message").textContent = "Sorry, something went wrong, try again" +data;
				}
		});
	}
	else {
		document.getElementById("message").textContent = "You didn't Enter a Username or Password";
	}
} //end of function register
});