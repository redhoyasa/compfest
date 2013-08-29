<html>
	<head>
		<link href="style.css" rel="stylesheet">
		<script src="js/jquery.js" type="text/javascript"></script>
	</head>
	
	<script type="text/javascript">
	/*
Count down until any date script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free scripts here!
Modified by Robert M. Kuhnhenn, D.O. 
on 5/30/2006 to count down to a specific date AND time,
and on 1/10/2010 to include time zone offset.
*/

/*  Change the items below to create your countdown target date and announcement once the target date and time are reached.  */
var current="New Compfest";        //—>enter what you want the script to display when the target date and time are reached, limit to 20 characters
var year=2013;        //—>Enter the count down target date YEAR
var month=08;          //—>Enter the count down target date MONTH
var day=30;           //—>Enter the count down target date DAY
var hour=20;          //—>Enter the count down target date HOUR (24 hour clock)
var minute=00;        //—>Enter the count down target date MINUTE
var tz=+7;            //—>Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

//—>    DO NOT CHANGE THE CODE BELOW!    <—
var today = new Date();
var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
var todayy=today.getYear();

function countdown(yr,m,d,hr,min){
theyear=year;themonth=month;theday=day;thehour=hour;theminute=minute;
var today=new Date();
var todayy=today.getYear();
if (todayy < 1000) { todayy+=1900; }
var todaym=today.getMonth();
var todayd=today.getDate();
var todayh=today.getHours();
var todaymin=today.getMinutes();
var todaysec=today.getSeconds();
var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
var futurestring1=(montharray[month-1]+" "+day+", "+year+" "+hour+":"+minute);
var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
var dd=futurestring-todaystring;
var dday=Math.floor(dd/(60*60*1000*24)*1);
var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
	if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
		
		return;
	}
	else {
			$("#satu").html("<span class=\"time\">"+dday + "</span><div class=\"plus\">DAYS</div>");
			$("#dua").html("<span class=\"time\">"+dhour + "</span><div class=\"plus\">HOURS</div>");
			$("#tiga").html("<span class=\"time\">"+dmin + "</span><div class=\"plus\">MINS</div>");
			$("#empat").html("<span class=\"time\">"+dsec + "</span><div class=\"plus\">SECS</div>");
/*document.getElementById('satu').innerHTML=dday;
document.getElementById('dua').innerHTML=dhour;
document.getElementById('tiga').innerHTML=dmin;
document.getElementById('empat').innerHTML=dsec;*/
		setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
	}
}

countdown(year,month,day,hour,minute);
		/*countdown();


		function countdown() {
			var interval;
			var bulan = 4;
			var hari  = 1;
			var jam   = 20;
			var min   =  0;

			var total = (bulan*30*24*3600) + (hari*24*3600) + (jam*3600); 
			var date = new Date();
			//date.setUTCDate(15);

			var day = date.getDay();/*<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						echo date("d");
					?>;*/
		/*	var hour  = date.getHours();//<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');echo date("H");?>;
			var min  = date.getMinutes();//<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');echo date("i");?>;
			var sec = date.getSeconds();//<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');echo date("s");?>;
			var month = date.getMonth();/*<?php if(function_exists('date_default_timezone_set')) date_default_timezone_set('Asia/Jakarta');
						$bul = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
							$lol = date("M");
							for ($i = 0;$i<12;$i++) {
								if ($lol === $bul[$i]) {
									echo $i+1;
									break;
								}
							}
						?>;*/
		/*	var total2 = (month*30*24*3600) + (day*24*3600) + (hour*3600) + (min *60) + sec;
			total2  = total - total2;
			//console.log(total + " "+total2);
			var a1 = total2%30;total2 -= (a1*30);
			var a2 = total2%24;total2 -= (a2*24);
			var a3 = total2%3600; total2 -=(a3*3600);
			var a4 = total2%60; total-=(a4*60);
			var a5 = total2;
			//console.log(a1+" "+a2+" "+a3+" "+a4+" "+a5);
			$("#satu").html("<span class=\"time\">"+day + "</span><div class=\"plus\">DAYS</div>");
			$("#dua").html("<span class=\"time\">"+hour + "</span><div class=\"plus\">HOURS</div>");
			$("#tiga").html("<span class=\"time\">"+min + "</span><div class=\"plus\">MINS</div>");
			$("#empat").html("<span class=\"time\">"+sec + "</span><div class=\"plus\">SECS</div>");
			//console.log(month+" "+day + " "+hour+" "+min+" "+sec);
			setTimeout(countdown, 1000);
		}			*/
	</script>

	
	<body onload="countdown()">
		<div id="mid">
			<h1>NEW <span style="color:#ED1C24;">COMPFEST!</span></h1>
			<div class="box" id="satu">
				<div class="plus">DAYS</div>
			</div>
			<div class="box" id="dua">
				<div class="plus">HOURS</div>
			</div>
			<div class="box" id="tiga">
				<div class="plus">MINS</div>
			</div>
			<div class="box" id="empat">
				<div class="plus">SECS</div>
			</div>
			<div style="clear:both;height:20px;"></div>
			<div style="clear:both;">
				<a href="https://twitter.com/CompFest" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @CompFest</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
			</div>
		</div>
	</body>
</html>