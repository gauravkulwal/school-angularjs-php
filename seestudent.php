<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title></title>
    <!-- Latest compiled and minified CSS -->
   
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body ng-app="myApp" ng-controller="myCtrl">
    <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand text-center" style="color:red;font-weight:bold;" href="#">Madhav Vidhya Mandir</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Amin</a></li>
      <li class=""><a href="studentAdd.php">Add student data</a></li>
      <li class=""><a href="studentfee.php">fee</a></li>
      <li class=""><a href="facultysalary.php">faculty salary</a></li>
      <li class="active"><a href="seestudent.php">student information</a></li>



    
    </ul>
   
    <ul class="nav navbar-nav navbar-right">
     
      <li><a href="adminlogout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
    </ul>
  </div>
</nav>
<div  style="margin-left:39px;">
SELECT NAME : <select name="" ng-model="classvalue.class" id=""  style="margin-left:20px;">


<option value="6">6th</option>
      <option value="7">7th</option>
      <option value="8">8th</option>
      <option value="9">9th</option>
      <option value="10">10th</option>
</select>

<span style="margin-left:39px;" >SEARCH STUDENT BY NAME:</span>
 <input type="text" ng-model="search.stname" >


</div>
<hr>
<table class="table  table-bordered table-hover table-responsive table-striped ">
<tr>
<td>id</td>
<th>Class</th>
<th>roll</th>
<th>name</th>
<th>father</th>
<th>photo</th></tr>
<tr ng-repeat="x in names |filter:classvalue |filter:search">

<td>{{x.id}}</td>
<td>{{x.class}}</td>
<td>{{x.rollnumber}}</td>
<td>{{x.stname | uppercase}}</td>
<td>{{x.stfname |uppercase}}</td>


<td><img ng-src="{{x.image}}" alt="wrong" style="width:100px;height:150px;"></td>
<td><button ng-click="remove($index,x.id )"class="btn btn-danger">delete</button></td>
<td><a href="view.php?id={{x.id}}"><button ng-click="view($index,x.id )"class="btn btn-danger">view</button></a></td>

</tr>
</table>


    </body>
    
    <script>
var fetch = angular.module('myApp', []);

fetch.controller('myCtrl', ['$scope', '$http', function ($scope, $http) {
 $http({
  method: 'get',
  url: 'select.php'
 }).then(function successCallback(response) {
  
  $scope.names = response.data;
 });
 
 $scope.remove = function(index,id){
 
 $http({
  method: 'post',
  url: 'delete.php',
  data: {id:id},
 }).then(function successCallback(response) {
  $scope.names.splice(index, 1);
 }); 
}
}


]);

</script>
</html>
