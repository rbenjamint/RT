<!DOCTYPE html>
<html lang="en" data-ng-app="app">
<head>
  <meta charset="utf-8" />
  <title>{{ app.name }}</title>
  
  <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="/css/font.css" type="text/css" />
  <link rel="stylesheet" href="/css/app.css" type="text/css" />
</head>
<body ng-controller="AppCtrl">
  <div class="app app-header-fixed app-aside-fixed" id="app" ng-class="{'container':app.settings.container}" ui-view></div>
  <!-- jQuery -->
  <script src="js/jquery/jquery.min.js"></script>
  <!-- Angular -->
  <script src="/js/libs/angular/angular.js"></script>
  <script src="/js/libs/angular/angular-cookies.js"></script>
  <script src="/js/libs/angular/angular-animate.js"></script>
  <script src="/js/libs/angular/angular-ui-router.js"></script>
  <script src="/js/libs/angular/ngStorage.js"></script>
  <script src="/js/libs/angular/ocLazyLoad.js"></script>
  <script src="/js/libs/angular/ui-bootstrap-tpls.js"></script>
  <script src="/js/libs/underscore.js"></script>
  <script src="/js/angular/angular-translate.js"></script>
  <script src="/js/angular/ui-jq.js"></script>
  <script src="/js/angular/ui-load.js"></script>
  <script src="/js/angular/ui-validate.js"></script>
  <!-- App -->
  <script src="/js/app.js"></script>
  <script src="/js/config.js"></script>
  <script src="/js/login.js"></script>
  <script src="/js/services.js"></script>
  <script src="/js/controllers.js"></script>
  <script src="/js/filters.js"></script>
  <script src="/js/directives.js"></script>
  <!-- Lazy loading -->
  <script>
    angular.module("app").constant("CSRF_TOKEN", '<?php echo csrf_token(); ?>');
  </script>
</body>
</html>