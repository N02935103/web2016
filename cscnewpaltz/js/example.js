angular.module('ui.bootstrap.demo', ['ngAnimate', 'ui.bootstrap']);
angular.module('ui.bootstrap.demo').controller('DatepickerDemoCtrl', function ($scope) {
  $scope.today = function() {
    $scope.dt = new Date();
  };
  $scope.today();

  $scope.clear = function() {
    $scope.dt = null;
  };

  // Disable weekend selection
  $scope.disabled = function(date, mode) {
    return mode === 'day' && (date.getDay() === 0 || date.getDay() === 6);
  };

  $scope.toggleMin = function() {
    $scope.minDate = $scope.minDate ? null : new Date();
  };

  $scope.toggleMin();
  $scope.maxDate = new Date(2020, 5, 22);

  $scope.open1 = function() {
    $scope.popup1.opened = true;
  };

  $scope.open2 = function() {
    $scope.popup2.opened = true;
  };

  $scope.setDate = function(year, month, day) {
    $scope.dt = new Date(year, month, day);
  };

  $scope.dateOptions = {
    formatYear: 'yy',
    startingDay: 1
  };

  $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];
  $scope.format = $scope.formats[0];
  $scope.altInputFormats = ['M!/d!/yyyy'];

  $scope.popup1 = {
    opened: false
  };

  $scope.popup2 = {
    opened: false
  };
  
var fridayMeating = new Date(); // pass the real date here
var day = fridayMeating.getDay(); // day of the week
var date = fridayMeating.getDate(); // day of the month
var noOfWeeksAhead = 0;
var noOfWeeksAhead1 = 1;
fridayMeating.setDate(date + 5 + 7 * noOfWeeksAhead - day); // 3 = wednesday, 7 for next week
var afterfridayMeating = new Date();

var mondayMeating = new Date(); // pass the real date here
var day = mondayMeating.getDay(); // day of the week
var date = mondayMeating.getDate(); // day of the month
var noOfWeeksAhead = 0;
var noOfWeeksAhead1 = 1;
mondayMeating.setDate(date + 1 + 7 * noOfWeeksAhead - day); // 3 = wednesday, 7 for next week
var aftermondayMeating = new Date();

var nxmeating= new Date();
if(nxmeating>mondayMeating){
	nxmeating=fridayMeating;
}

if(nxmeating<mondayMeating){
	nxmeating=mondayMeating;
}
// 
// if(dt>fridayMeating){
	// nxmeating=mondayMeating;
// }

$scope.nextMeating=new Date(nxmeating);
  
  $scope.events =
    [
      {
        date: fridayMeating,
        status: 'full'
      },
      {
        date: mondayMeating,
        status: 'full'
       }
      
          ];
    
     for(var i=1; i<=1; i++) {
 
     $scope.events.push({
    	 date: afterfridayMeating.setDate(date + 5 + 7 * i - day),
         status: 'full'  
     },
     
     {
    	 date: aftermondayMeating.setDate(date + 1 + 7 * i - day),
         status: 'full'  
     }
     
     );
     
    
 }

  $scope.getDayClass = function(date, mode) {
    if (mode === 'day') {
      var dayToCheck = new Date(date).setHours(0,0,0,0);

      for (var i = 0; i < $scope.events.length; i++) {
        var currentDay = new Date($scope.events[i].date).setHours(0,0,0,0);

        if (dayToCheck === currentDay) {
          return $scope.events[i].status;
        }
      }
    }

    return '';
  };
});