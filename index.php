<html>
<head>
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" href="css/gpio-led.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<script src="js/angular.min.js"></script>
	<script src="js/gpio-led.js"></script>
</head>
<body ng-app="colorsApplication" ng-controller="colorsController">
	<div class="w3-container w3-black w3-padding">Demonstration of Common-Anode RGB Led.</div>
	<div class="w3-container w3-lime w3-padding">
		<div class="w3-half w3-left">
			<div class="colors" style="float: left; width: 90%;">
				<p class="w3-margin" ng-repeat="(id, details) in colors.available">
					<button ng-click="colors.choose(details);" style="width: 100%;" class="w3-btn w3-padding w3-border w3-border-black w3-round-jumbo {{details.class}}">{{details.name}}</button>
				</p>
			</div>
		</div>
		<div class="w3-half w3-right">
			<div class="w3-container w3-border w3-border-black w3-center {{colors.current}}">
				<img src="AdditiveColor.svg" class="w3-padding" style="width: 90%;">
			</div>
			<div>
				<table>
					<tr>
						<th>RGB Led</th>
						<th>Header Pin</th>
					</tr>
					<tr>
						<td>Blue</td>
						<td>#40</td>
					</tr>
					<tr>
						<td>Green</td>
						<td>#38</td>
					</tr>
					<tr>
						<td>Ground</td>
						<td>#36</td>
					</tr>
					<tr>
						<td>Red</td>
						<td>#32</td>
					</tr>
				</table>
			</div>
		</div>
	</div>	
</body>
</html>
