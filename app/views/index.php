<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laravel4 AngularJS Authentication and security</title>
    <link href="app/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="app/css/app.css" rel="stylesheet" />
    <link href="app/css/ng-grid.min.css" rel="stylesheet" />
</head>
<body ng-app="myApp">

<div class="container" ng-view></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="app/lib/angular/angular.min.js"></script>
<script src="app/lib/angular/angular-resource.min.js"></script>
<script src="app/lib/angular/angular-sanitize.min.js"></script>
<script src="app/lib/angular/ng-grid.min.js"></script>
<script src="app/js/app.js"></script>
<script src="app/js/controllers.js"></script>
<script src="app/js/directives.js"></script>
<script src="app/js/filters.js"></script>
<script src="app/js/services.js"></script>
<script>
    angular.module("myApp").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
</script>
</body>
</html>