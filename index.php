<!DOCTYPE html>
<html lang="en" ng-app="ffApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FF Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body ng-controller="StageCtrl">
  	<div class="container">
	    <div class="row">
	    	<div class="col-sm-12">	
	    		<h1>FF Project!</h1>
	    		<hr />
	    	</div>
	    </div>
	    <div class="row" ng-controller="PlayerCtrl as playerctrl">
	    	<div class="col-sm-3">
	    		<h4 class="text-center">My Team</h4>
	    		<table class="table table-striped">
					<tr ng-repeat="myPlayer in playerctrl.myPlayers">
						<td>{{myPlayer.displayName}}</td>
					</tr>
				</table>
	    	</div>
	    	<div class="col-sm-6">
	    		<h3 class="text-center">Tweets</h3>
	    		<form>
	    			<textarea rows="3" style="width:100%;" placeholder="tweet here" maxlength="144" ng-model="tweetBox"></textarea>
	    			<input type="submit" value="submit" /><span class="pull-right text-muted">{{144 - tweetBox.length}}</span>
	    		</form>
	    		<hr />
	    		<h3 class="text-center">Player Pool</h3>
	    		<div>

					<ul class="nav nav-tabs">
						<li class="active"><a href="#qb" data-toggle="tab">QB</a></li>
						<li><a href="#rb" data-toggle="tab">RB</a></li>
						<li><a href="#wr" data-toggle="tab">WR</a></li>
						<li><a href="#te" data-toggle="tab">TE</a></li>
						<li><a href="#k" data-toggle="tab">K</a></li>
						<li><a href="#def" data-toggle="tab">DEF</a></li>
					</ul>
				
					<div class="tab-content">
						<div class="tab-pane active" id="qb" ng-init="playerctrl.grabList('qb')">
							<table class="table table-striped">
								<tr ng-repeat="player in playerctrl.qbList | filter:{position:'QB'} ">
									<td>{{player.displayName}}</td>
									<td ng-click="addPlayer(player.playerId)">
										<button><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
									</td>
								</tr>
							</table>
						</div>
						<div class="tab-pane" id="rb" ng-init="playerctrl.grabList('rb')">
							<table class="table table-striped">
								<tr ng-repeat="player in playerctrl.rbList | filter:{position:'RB'}">
									<td>{{player.displayName}}</td>
									<td ng-click="addPlayer(player.playerId)">
										<button><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
									</td>
								</tr>
							</table>
						</div>
						<div class="tab-pane" id="wr" ng-init="playerctrl.grabList('wr')">
							<table class="table table-striped">
								<tr ng-repeat="player in playerctrl.wrList | filter:{position:'WR'}">
									<td>{{player.displayName}}</td>
									<td ng-click="addPlayer(player.playerId)">
										<button><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
									</td>
								</tr>
							</table>
						</div>
						<div class="tab-pane" id="te" ng-init="playerctrl.grabList('te')">
							<table class="table table-striped">
								<tr ng-repeat="player in playerctrl.teList | filter:{position:'TE'}">
									<td>{{player.displayName}}</td>
									<td ng-click="addPlayer(player.playerId)">
										<button><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
									</td>
								</tr>
							</table>
						</div>
						<div class="tab-pane" id="k" ng-init="playerctrl.grabList('k')">
							<table class="table table-striped">
								<tr ng-repeat="player in playerctrl.kList | filter:{position:'K'}">
									<td>{{player.displayName}}</td>
									<td ng-click="addPlayer(player.playerId)">
										<button><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
									</td>
								</tr>
							</table>
						</div>
						<div class="tab-pane" id="def" ng-init="playerctrl.grabList('def')">
							<table class="table table-striped">
								<tr ng-repeat="player in playerctrl.defList | filter:{position:'DEF'}">
									<td>{{player.displayName}}</td>
									<td ng-click="addPlayer(player.playerId)">
										<button><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
									</td>
								</tr>
							</table>
						</div>
					</div>
				
				</div>
	    	</div>
	    	<div class="col-sm-3">
	    		<h4 class="text-center">Player</h4>
	    	</div>
	    </div>
  	</div>
    
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular.min.js"></script>
    <script src="playerList.js"></script>
    <script>
    	angular.module('ffApp', [])
    	.controller('StageCtrl', function( $scope ) {
	    	
    	})
    	.controller('PlayerCtrl', function ( $scope, $http ){
    		this.myPlayers = [];
    		this.grabList = function(whichPos){
				this.qbList = playerList;
				this.rbList = playerList;
				this.wrList = playerList;
				this.teList = playerList;
				this.kList = playerList;
				this.defList = playerList;
       		}
       		this.addPlayer = function(data){
	       		//this.myPlayers.push(data);
	       		console.log(data);
       		};
    	});
    </script>
  </body>
</html>
