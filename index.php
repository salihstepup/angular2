<!doctype html>
<html ng-app="myApp">
<head>

<!-- for adding angular js -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<!-- for adding angular router -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

</head>
<body > 


<a href="#!/view1">VIEW1</a><br>OR<br>
<a href="#!/view2">VIEW2</a>
<div ng-view></div>
<script src="app/controllers/route.js"></script>
<script src="app/controllers/postControl.js"></script>
</body>
</html>