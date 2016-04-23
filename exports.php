

<html>
<head>
<title>RLB Export Tracker</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="/countdown/flipclock.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="/countdown/flipclock.js"></script>	
<script src="/countdown/countdown.js"></script>
</head>



<body class="sub">

<h2>RLB Export Tracker</h2>

<script src="jstz.js"></script>
<p><script>
var timezone = jstz.determine();
document.cookie = 'tz=' + timezone.name();
console.log(timezone.name());
</script></p>

<a href="http://reddit.com/r/redditleaguebaseball"><img src="header.png" /></a>

<?php
include("configuration.php");
		$timezone = 'America/New_York';
		$tztest = $_COOKIE[$tz];
		date_default_timezone_set('America/New_York');
		 
if (file_exists($leaguefile)) {
    echo "<b>Last League File Upload:</b> " . date ("F d Y g:ia T", filemtime($leaguefile));
}
?><br />

<h2>Steam League &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Origin League</h2>

<table class="left" width="45%">
	<tr><th colspan="2">East</th></tr>
	<tr><?php if (file_exists($teamid_4)) {
   if (filemtime($leaguefile) < filemtime($teamid_4))  {
   echo "<td>$team_4</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_4));
   }
   if (filemtime($leaguefile) > filemtime($teamid_4))  {
   echo "<td>$team_4</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_4));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_1)) {
   if (filemtime($leaguefile) < filemtime($teamid_1))  {
   echo "<td>$team_1</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_1));
   }
   if (filemtime($leaguefile) > filemtime($teamid_1))  {
   echo "<td>$team_1</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_1));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_2)) {
   if (filemtime($leaguefile) < filemtime($teamid_2))  {
   echo "<td>$team_2</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_2));
   }
   if (filemtime($leaguefile) > filemtime($teamid_2))  {
   echo "<td>$team_2</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_2));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_3)) {
   if (filemtime($leaguefile) < filemtime($teamid_3))  {
   echo "<td>$team_3</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_3));
   }
   if (filemtime($leaguefile) > filemtime($teamid_3))  {
   echo "<td>$team_3</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_3));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
</table>

<table class="right" width="45%">
	<tr><th colspan="2">East</th></tr>
	<tr><?php if (file_exists($teamid_16)) {
   if (filemtime($leaguefile) < filemtime($teamid_16))  {
   echo "<td>$team_16</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_16));
   }
   if (filemtime($leaguefile) > filemtime($teamid_16))  {
   echo "<td>$team_16</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_16));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_14)) {
   if (filemtime($leaguefile) < filemtime($teamid_14))  {
   echo "<td>$team_14</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_14));
   }
   if (filemtime($leaguefile) > filemtime($teamid_14))  {
   echo "<td>$team_14</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_14));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_15)) {
   if (filemtime($leaguefile) < filemtime($teamid_15))  {
   echo "<td>$team_15</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_15));
   }
   if (filemtime($leaguefile) > filemtime($teamid_15))  {
   echo "<td>$team_15</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_15));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_13)) {
   if (filemtime($leaguefile) < filemtime($teamid_13))  {
   echo "<td>$team_13</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_13));
   }
   if (filemtime($leaguefile) > filemtime($teamid_13))  {
   echo "<td>$team_13</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_13));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
</table>

<table class="left" width="45%">
	<tr><th colspan="2">Central</th></tr>
	<tr><?php if (file_exists($teamid_7)) {
   if (filemtime($leaguefile) < filemtime($teamid_7))  {
   echo "<td>$team_7</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_7));
   }
   if (filemtime($leaguefile) > filemtime($teamid_7))  {
   echo "<td>$team_7</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_7));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_8)) {
   if (filemtime($leaguefile) < filemtime($teamid_8))  {
   echo "<td>$team_8</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_8));
   }
   if (filemtime($leaguefile) > filemtime($teamid_8))  {
   echo "<td>$team_8</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_8));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_5)) {
   if (filemtime($leaguefile) < filemtime($teamid_5))  {
   echo "<td>$team_5</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_5));
   }
   if (filemtime($leaguefile) > filemtime($teamid_5))  {
   echo "<td>$team_5</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_5));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_6)) {
   if (filemtime($leaguefile) < filemtime($teamid_6))  {
   echo "<td>$team_6</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_6));
   }
   if (filemtime($leaguefile) > filemtime($teamid_6))  {
   echo "<td>$team_6</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_6));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
</table>

<table class="right" width="45%">
	<tr><th colspan="2">Central</th></tr>
	<tr><?php if (file_exists($teamid_17)) {
   if (filemtime($leaguefile) < filemtime($teamid_17))  {
   echo "<td>$team_17</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_17));
   }
   if (filemtime($leaguefile) > filemtime($teamid_17))  {
   echo "<td>$team_17</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_17));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_20)) {
   if (filemtime($leaguefile) < filemtime($teamid_20))  {
   echo "<td>$team_20</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_20));
   }
   if (filemtime($leaguefile) > filemtime($teamid_20))  {
   echo "<td>$team_20</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_20));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_19)) {
   if (filemtime($leaguefile) < filemtime($teamid_19))  {
   echo "<td>$team_19</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_19));
   }
   if (filemtime($leaguefile) > filemtime($teamid_19))  {
   echo "<td>$team_19</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_19));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_18)) {
   if (filemtime($leaguefile) < filemtime($teamid_18))  {
   echo "<td>$team_18</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_18));
   }
   if (filemtime($leaguefile) > filemtime($teamid_18))  {
   echo "<td>$team_18</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_18));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
</table>

<table class="left" width="45%">
	<tr><th colspan="2">West</th></tr>
	<tr><?php if (file_exists($teamid_11)) {
   if (filemtime($leaguefile) < filemtime($teamid_11))  {
   echo "<td>$team_11</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_11));
   }
   if (filemtime($leaguefile) > filemtime($teamid_11))  {
   echo "<td>$team_11</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_11));
   echo "</td>";
   }
}
else
echo "{$team_11} -"; ?></tr>
	<tr><?php if (file_exists($teamid_9)) {
   if (filemtime($leaguefile) < filemtime($teamid_9))  {
   echo "<td>$team_9</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_9));
   }
   if (filemtime($leaguefile) > filemtime($teamid_9))  {
   echo "<td>$team_9</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_9));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_10)) {
   if (filemtime($leaguefile) < filemtime($teamid_10))  {
   echo "<td>$team_10</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_10));
   }
   if (filemtime($leaguefile) > filemtime($teamid_10))  {
   echo "<td>$team_10</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_10));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_12)) {
   if (filemtime($leaguefile) < filemtime($teamid_12))  {
   echo "<td>$team_12</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_12));
   }
   if (filemtime($leaguefile) > filemtime($teamid_12))  {
   echo "<td>$team_12</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_12));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
</table>

<table width="45%">
	<tr><th colspan="2">West</th></tr>
	<tr><?php if (file_exists($teamid_24)) {
   if (filemtime($leaguefile) < filemtime($teamid_24))  {
   echo "<td>$team_24</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_24));
   }
   if (filemtime($leaguefile) > filemtime($teamid_24))  {
   echo "<td>$team_24</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_24));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_23)) {
   if (filemtime($leaguefile) < filemtime($teamid_23))  {
   echo "<td>$team_23</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_23));
   }
   if (filemtime($leaguefile) > filemtime($teamid_23))  {
   echo "<td>$team_23</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_23));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_21)) {
   if (filemtime($leaguefile) < filemtime($teamid_21))  {
   echo "<td>$team_21</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_21));
   }
   if (filemtime($leaguefile) > filemtime($teamid_21))  {
   echo "<td>$team_21</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_21));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
	<tr><?php if (file_exists($teamid_22)) {
   if (filemtime($leaguefile) < filemtime($teamid_22))  {
   echo "<td>$team_22</td><td bgcolor=\"#66ff33\">" . date ("M d g:ia", filemtime($teamid_22));
   }
   if (filemtime($leaguefile) > filemtime($teamid_22))  {
   echo "<td>$team_22</td><td bgcolor=\"#cc0000\">" . date ("M d g:ia", filemtime($teamid_22));
   echo "</td>";
   }
}
else
echo "{$team_1} -"; ?></tr>
</table>

<h2 class="sim-header">Time Until Next Sim</h2>

		<div class="clock"></div>

		<script type="text/javascript">
			var clock;

			$(document).ready(function() {

				var HOURS = 60 * 60 * 1000; // ms
				var DAYS = 24 * HOURS;
				 
				var now = new Date();
				 
				// midnight on Sunday morning
                var weekStart = new Date(now.getFullYear(), now.getMonth(), now.getDate() - now.getDay(), 0, 0, 0, 0);
                var weekStartMsUTC = weekStart.getTime() - now.getTimezoneOffset() * 60 * 1000;
                                 
                // Tuesday 12am UTC
                var event1 = new Date(weekStartMsUTC + 2 * DAYS);
                // Wednesday 12am UTC
                var event2 = new Date(weekStartMsUTC + 3 * DAYS);
                // Friday 12am UTC
                var event3 = new Date(weekStartMsUTC + 5 * DAYS);
                // Sunday 12am UTC
                var event4 = new Date(weekStartMsUTC + 7 * DAYS);
				 
				// Find out which event is next.
				// If all if statements fail, the last event of the week is past,
				// so use the first event of next week.
				var nextEvent = new Date((event1.getTime() + 7 * DAYS) - (now.getTimezoneOffset() * 60 * 1000));
				 
				if (now < event4) nextEvent = event4;
				if (now < event3) nextEvent = event3;
				if (now < event2) nextEvent = event2;
				if (now < event1) nextEvent = event1;
				

				// Calculate the difference in seconds between the future and current date
				var diff = nextEvent.getTime() / 1000 - now.getTime() / 1000;
				
				console.log("diff: " + diff);
				console.log("event1: " + event1);
				console.log("event2: " + event2);
				console.log("event3: " + event3);
				console.log("event4: " + event4);
				console.log("weekStart: " + weekStart);
				console.log("weekStartMsUTC: " + weekStartMsUTC);
				console.log("nextEvent: " + nextEvent);
				console.log("now: " + now);

				// Instantiate a countdown FlipClock
				clock = $('.clock').FlipClock(diff, {
					clockFace: 'DailyCounter',
					countdown: true
				});
			});

			var clock = document.getElementById("countdown");
			targetDate = new Date(2050, 00, 01); // Jan 1, 2050;
			 
			clock.innerHTML = countdown(targetDate).toString();
			setInterval(function(){
			clock.innerHTML = countdown(targetDate).toString();
			}, 1000);
		</script>

<a href="http://branchingdialogue.net"><img class="bottom" src="bd-tag.png" /></a>

</body>
</html>
