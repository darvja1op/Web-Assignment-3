<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='fullcalendar/fullcalendar.css' />
<link rel='stylesheet' type='text/css' href='fullcalendar/fullcalendar.print.css' media='print' />
<script type='text/javascript' src='jquery/jquery-1.8.1.min.js'></script>
<script type='text/javascript' src='jquery/jquery-ui-1.8.23.custom.min.js'></script>
<script type='text/javascript' src='fullcalendar/fullcalendar.min.js'></script>
<script type='text/javascript'>
	$(document).ready(function() {
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			editable: false,
			events: "events.php"
		});
		
	});
</script>
<style type='text/css'>

	body {
		margin-top: 40px;
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}

	#calendar {
		width: 600px;
		margin: 0 auto;
		}

</style>
</head>
<body>
<div id='calendar'></div>
</body>
</html>