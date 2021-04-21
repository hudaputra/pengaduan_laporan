function HeaderController($scope, $location){
   $scope.isActive = viewLocation =>{
      return viewLocation = $location.path();
   };
}