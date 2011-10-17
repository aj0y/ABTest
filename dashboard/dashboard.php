<?php

include "experiment.php";
Experiment::processDashboard();

?>

<html>
	<head>
		<title>Experiment Dashboard</title>
		<script type="text/javascript" src="dashboard.js"></script>
		
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
		
		<link rel="stylesheet" type="text/css" media="screen" href="dashboard.css" />
		
	</head>
	<body>
		<div class='header'>
			
		</div>
		
		<div class='body'>
			<div class='actions'>
				
			</div>
			
			<div class='experiments'>
				<form name='' method='POST' action='dashboard.php'>
				<table>
					<caption>Experiments</caption>
					<thead>
						
					</thead>
					<tbody>
						
					</tbody>
				</table>
				</form>
			</div>
		</div>
		
		<div class='footer'>
			
		</div>
	</body>
</html>