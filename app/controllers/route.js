var app = angular.module("myApp", ["ngRoute"]);
app.config(function ($routeProvider) {
  $routeProvider

    .when("/view1", {
      templateUrl: "templates/view1.html",
      controller: "FirstController",
    })
    .when("/view2", {
        templateUrl: "templates/view2.html",
        controller: "FirstController",
      })
});
