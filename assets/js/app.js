var app = angular.module('myAstro', ['ngAnimate']);


app.controller('MainCtrl', function ($scope) {
    $scope.showModal = false;
    $scope.toggleModal = function(){
        $scope.showModal = !$scope.showModal;
    };
  });

app.directive('modal', function () {
    return {
      template: '<div class="modal fade" id="modal">' +
          '<div class="modal-dialog">' +
          '<div class="modal-Container">'+
            '<div class="modal-content">' +
                '<img src="assets/images/popup.gif"/>' +
              '<div class="modal-body" ng-transclude></div>' +
            '</div>' +
          '</div>' +
          '</div>'+
        '</div>',
      restrict: 'E',
      transclude: true,
      replace:true,
      scope:true,
      link: function postLink(scope, element, attrs) {
        scope.title = attrs.title;

        scope.$watch(attrs.visible, function(value){
          if(value == true)
            $(element).modal('show');
          else
            $(element).modal('hide');
        });

        $(element).on('shown.bs.modal', function(){
          scope.$apply(function(){
            scope.$parent[attrs.visible] = true;
          });
        });

        $(element).on('hidden.bs.modal', function(){
          scope.$apply(function(){
            scope.$parent[attrs.visible] = false;
          });
        });
      }
    };
  });

// constant variables
var constants = new(function() {
    var rows = 4;
    var columns = 4;
    var numMatches = (rows * columns) / 2;
    this.getRows = function() {
        return rows; };
    this.getColumns = function() {
        return columns; };
    this.getNumMatches = function() {
        return numMatches; };
})();

// Global Variables
var currentSessionOpen = false;
var previousCard = null;
var numPairs = 0;

// this function creates deck of cards that returns an object of cards
// to the caller
function createDeck() {
    var rows = constants.getRows();
    var cols = constants.getColumns();
    var key = createRandom();
    var deck = {};
    deck.rows = [];

    // create each row
    for (var i = 0; i < rows; i++) {
        var row = {};
        row.cards = [];

        // creat each card in the row
        for (var j = 0; j < cols; j++) {
            var card = {};
            card.isFaceUp = false;
            card.item = key.pop();
            row.cards.push(card);
        }
        deck.rows.push(row);
    }
    return deck;
}

// used to remove something form an array by index
function removeByIndex(arr, index) {
    arr.splice(index, 1);
}

function insertByIndex(arr, index, item) {
    arr.splice(index, 0, item);
}

// creates a random array of items that contain matches
// for example: [1, 5, 6, 5, 1, 6]
function createRandom() {
    var matches = constants.getNumMatches();
    var pool = [];
    var answers = [];
    var astro = ['belier', 'cancer', 'capricorne', 'gemeaux',
        'poisson', 'taureau', 'verseau', 'vierge'
    ];
    // set what kind of item to display
    var items = astro;

    // create the arrays for random numbers and item holder
    for (var i = 0; i < matches * 2; i++) {
        pool.push(i); // random numbers
    }

    // generate an array with the random items
    for (var n = 0; n < matches; n++) {
        // grab random letter from array and remove that letter from the
        // original array
        var randLetter = Math.floor((Math.random() * items.length));
        var letter = items[randLetter];
        removeByIndex(items, randLetter);
        // generate two random placements for each item
        var randPool = Math.floor((Math.random() * pool.length));

        // remove the placeholder from answers and insert the letter into
        // random slot
        insertByIndex(answers, pool[randPool], letter);

        // remove random number from pool
        removeByIndex(pool, randPool);

        // redo this process for the second placement
        randPool = Math.floor((Math.random() * pool.length));
        insertByIndex(answers, pool[randPool], letter);

        // remove rand number from pool
        removeByIndex(pool, randPool);
    }
    return answers;
}


app.controller("CardController", function($scope, $timeout) {
    $scope.deck = createDeck();
    $scope.isGuarding = true;
    $scope.inGame = false;

    $scope.check = function(card) {
            if (currentSessionOpen && previousCard != card && previousCard.item == card.item && !card.isFaceUp) {
                card.isFaceUp = true;
                previousCard = null;
                currentSessionOpen = false;
                numPairs++;
            } else if (currentSessionOpen && previousCard != card && previousCard.item != card.item && !card.isFaceUp) {
                $scope.isGuarding = true;
                card.isFaceUp = true;
                currentSessionOpen = false;
                $timeout(function() {
                    previousCard.isFaceUp = card.isFaceUp = false;
                    previousCard = null;
                    $scope.isGuarding = $scope.timeLimit ? false : true;
                }, 1000);
            } else {
                card.isFaceUp = true;
                currentSessionOpen = true;
                previousCard = card;
            }

            if (numPairs == constants.getNumMatches()) {
                $scope.stopTimer();
                $('#modal').modal('toggle');
                //$('#modal').modal('show');



            }
        } //end of check()

    // for the timer
    $scope.timeLimit = 60000;
    $scope.isCritical = false;

    var timer = null;

    // start the timer as soon as the player presses start
    $scope.start = function() {
            // I need to fix this redundancy. I initially did not create this
            // game with a start button.
            $scope.deck = createDeck();
            // set the time of 1 minutes and remove the cards guard
            $scope.timeLimit = 60000;
            $scope.isGuarding = false;
            $scope.inGame = true;

            ($scope.startTimer = function() {
                $scope.timeLimit -= 1000;
                $scope.isCritical = $scope.timeLimit <= 10000 ? true : false;

                timer = $timeout($scope.startTimer, 1000);
                if ($scope.timeLimit === 0) {
                    $scope.stopTimer();
                    $scope.isGuarding = true;
                    $('#modal').modal('toggle');
                   // $('#modal').modal('show');
                }
            })();
        }
        // function to stop the timer
    $scope.stopTimer = function() {
        $timeout.cancel(timer);
        $scope.inGame = false;
        previousCard = null;
        currentSessionOpen = false;
        numPairs = 0;
         $('#modal').modal('toggle');
    }

});


function changeDate(i){
var e = document.getElementById('jour');
while(e.length>0)
e.remove(e.length-1);
var j=-1;
if(i=="na")
k=0;
else if(i==2)
k=28;
else if(i==4||i==6||i==9||i==11)
k=30;
else
k=31;
while(j++<k){
var s=document.createElement('option');
var e=document.getElementById('jour');
if(j==0){
s.text="Jour";
s.value="na";
try{
e.add(s,null);}
catch(ex){
e.add(s);}}
else{
s.text=j;
s.value=j;
try{
e.add(s,null);}
catch(ex){
e.add(s);}}}}
y = 1993;
while (y-->1940){
var s = document.createElement('option');
var e = document.getElementById('year');
s.text=y;
s.value=y;
try{
e.add(s,null);}
catch(ex){
e.add(s);}}





