
<?php 
	session_start();
	if(!isset($_SESSION['user']))
		header("Location: lgplz.php");
?>
<?php
$servername = "localhost";
$username = "kalyan";
$password = "roots";
$dbname = "airport";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



?>


<!DOCTYPE <!DOCTYPE html>
<html>
<head>

	<title>Beijing Airport </title>
</head>
<style type="text/css">
#pgwrap{
	position: relative;
	display: block;
	width: 1220px;
	min-height: 100%;
}
#pg{
	display: -webkit-flex;
	position: relative;
	-webkit-align-items:strech;

}
#pg:after { content: " "; display: block; clear: both;} 
#leftt{
	display: block;
	position: relative;
	float: left;
	width: 195px;
	
}
#midd{
	width: 920px;
	float: right;
	display: block;
	line-height: inherit;
	padding-left: 50;
}
#HDLN{
	float: right;
	display: block;
	height: 40px;
	color: #a65b6b;
	margin-right: 400px;
	font-family: Georgia;
	font-size: 16;
	margin-bottom: 2px;
	padding-bottom: 10px;
}
.redt{
	background: #cc0000;
	border-radius: 15px;
	border-bottom-left-radius:0px;
	border-bottom-right-radius: 0px; 
	padding: 5px;
	text-align: center;
	font-weight: bold;
	color: white;
	margin-top: 20px;
	 cursor: pointer;
}
a.mredt{
	background: #cc0000;
	border-radius: 15px;

	padding: 5px;
	text-align: center;
	font-weight: bold;
	color: white;
	text-decoration: none;
	margin-top: 20px;
	display: block;
}
a.mredt:hover{
	text-decoration: underline;
		border-bottom-left-radius:0px;
	border-bottom-right-radius: 0px; 
	 cursor: pointer;
}
a.xredt {
	 cursor: pointer;
	 text-decoration: none;
	background: #cc0000;
	border-radius: 15px;
	display: block;
	padding: 5px;
	text-align: center;
	font-weight: bold;
	color: white;
	margin-top: 20px;
}

.bott{
	background: #eee;
	border-radius: 15px;
	border-top-left-radius:0px;
	border-top-right-radius: 0px; 
	padding: 5px;
	text-align: center;
	color: white;
	margin-bottom: 25px;
}
.mitem {
    display: block;
    float: left;
    position: relative;
    width: 395px;
    height: 100px;
    margin: 0 10px 30px 0;
    padding: 0;
}
 .lbl {
	float: right;
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    width: 285px;
    height: 100px;
}
#uu{
	color: black;
	 cursor: pointer;

}
#uu:hover{
	text-decoration: underline;
	font-weight: bold;

}
#nl{
	text-align: center;
	border-radius: 15px;
	background: #cc0000;
	padding: 5px;
	margin-bottom: 25px;

}
a.hi{
	color: black;
	cursor: pointer;
	text-decoration: none;
	display: block;

}
a.hi:hover{
	text-decoration: underline;
	font-weight: bold;
}





.showme{ 
display: none;
}
.showhim:hover .showme{
display : block;
}












header {
	position: relative;
	display: block;
    text-align:center;
    padding:5px;	 
}
header.bla{
	width: fill_parent;
	 float:left;
    padding:5px;
}
ul.hd {
	position: relative;
	left: 0;
    list-style-type: none;
    height: 25px;
    overflow: hidden;
   border-radius: 25px;
   border-bottom-left-radius: 0px;
    border-top-left-radius: 0px;
    background: #cc0000;
     
     


    padding: 6px; 

}
#ftr {
    padding-top: 10px;
    border-radius: 6px;

    background-color: #cc0000;
    position: relative;
    display: block;
    padding: 3px;
}
.logo{
	position: relative;
	height: 50px;
	width: 80px;

	left: 0;
	top: 0;
}
.ite{
	position: relative;
	height: 100px;
	width: 100px;
}
li.hd {
    float: right;
    padding-right:100px;
}
nav{
	color: grey;
	background: #ddffff;
	 height:1000px;
    width:200px;
}
a.hre{
	
	margin-right:50px; 
    color: #ffffff;
    background:#cc0000;
    border-radius: 10px;
    padding: 5px; 
    display:inline-block;
    font-weight: bold;
    margin-right: 100px;
    text-decoration: none;

}
a.hred{
		margin-right:50px; 
    color: #cc0000;
    background:#ffffff;
    border-radius: 10px;
    padding: 5px; 
    display:inline-block;
    font-weight: bold;
    margin-right: 100px;
}
a.hred:hover{
	color: #ffffff;
    background:#cc0000;
    cursor: pointer;
    text-decoration: underline;
}
a.hre:hover{
	 cursor: pointer;
   color: #cc0000;
    background:#ffffff;
    text-decoration: underline;	  
}
section {
	
    width:1000px;
    background: #f000ff;
    float:left;
    padding:10px;	 	 
}
</style>
<style type="text/css">
  .w3-table-all{border:1px solid #ccc}
.w3-bordered tr,.w3-table-all tr{border-bottom:1px solid #d0d0d0}
.w3-striped tbody tr:nth-child(even){background-color:#f2f2f2}
.w3-table-all tr:nth-child(odd){background-color:#fff}
.w3-table-all tr:nth-child(even){background-color:#f2f2f2}
.w3-hoverable tbody tr{transition:background-color .25s ease}
.w3-hoverable tbody tr:hover{background-color:#f2f2f2}
.w3-centered tr th,.w3-centered tr td{text-align:center}
.w3-table td,.w3-table th,.w3-table-all td,.w3-table-all th{padding:6px 8px;display:table-cell;text-align:left;vertical-align:top}
.w3-table th:first-child,.w3-table td:first-child,.w3-table-all th:first-child,.w3-table-all td:first-child{padding-left:16px}*/
</style> 



<body>
<div id="pgwrap">
<div id="hdr">
<a href="passengers.php"><img class="logo" src="favicon.ico" height=40px width=60px ></img></a>
<div id="HDLN"><h1>Beijing AIRPORT</h1></div>
<ul class="hd">
	<li class="hd">
    	<a class="hre" href="passengers.php">Passengers</a>
		<a class="hre" href="cargo.php">Cargo</a>
		<a class="hre" href="Employee.php">Employee</a>
		<a class="hred" href="contact_us.php">Contact Us</a>
		<a class="hre" href="admin.php">Admin</a>
		
		<a style="color:white" >
	<?php 
			echo "Logged in as : "; 
			if($_SESSION['user']=='admin')
			echo 'Admin';
			else if($_SESSION['user']=='emp'){
			$x="select name from person where person_id= ".$_SESSION['Login']." ";
			
			$r=$conn->query($x);
			  $rr=$r->fetch_assoc();
			  echo $rr['name'];}
			  else{
			  	echo $_SESSION['user'];
			  }
			?>
		</a>
		<a href="logout.php" style="margin-left:15px">Logout</a>
	</li>
</ul>

</div>
<div id="pg">
<div id="leftt">


	
	<div class="showhim">
		<a class="mredt" href="passengers.php">Passengers</a>
		<div class="showme">
			<div class="bott">
				<a class="hi" href="flight_p.php">Flight info</a>
				<a class="hi" href="time_p.php">Time table</a>
				<a class="hi" href="contact_us.php">Help</a>
			</div>
		</div>
	</div>

	<div class="showhim">
		<a class="mredt" href="cargo.php">Cargo</a>
		<div class="showme">
			<div class="bott">
				<a class="hi" href="flight_c.php">Flight Info</a>
		<a class="hi" href="heavy_s.php">Heavy Shipments</a>
		<a class="hi" href="time_c.php">Time Table</a>
		<a class="hi" href="contact_us.php">Help</a>
			</div>
		</div>
	</div>



	<div class="showhim">
		<a class="mredt" href="Employee.php">Employee</a>
		<div class="showme">
			<div class="bott">
				<a class="hi" href="pilot.php">Pilot</a>
				<a class="hi" href="ah.php">Air Hostess</a>
				<a class="hi" href="ta.php">Ticketing Agent</a>
				<a class="hi" href="director.php">Director</a>
				<a class="hi" href="Security.php">Security</a>
			</div>
		</div>
	</div>	


<a class="xredt" href="myinfo.php">My Info</a>
	

	<div class="redt">Contact Us</div>
	<div class="bott">
		<a class="hi" href="GI.php">General Inquiry</a>
		<a  class="hi" href="FAQ.php">FAQs</a>
		<a  class="hi" href="complaint.php">Complaints</a>
	</div>	

	<a class="xredt" href="admin.php">admin</a>
		


</div>
<style type="text/css">
	p{
		font-family: verdana;
	}
	a{
		color: black;
		font-weight: normal;
	}
</style>
<div id="midd">
		<h1>FAQs</h1>
		
		









<div id="content">
<p style="font-size: 100%; text-decoration: underline"><a ="/en/cf/res/pdf/en/paxrights_en">Air passenger rights</a>
</p>
<p style="font-size: 100%; text-decoration: underline"><b>Reservation &amp; Tickets</b>
</p>
<ul>
	<li><a ="/en/contact/faq_all/faq001/">How to make, change or reconfirm a reservation ?</a></li><li><a ="/en/contact/faq_all/faq002/">How to get a refund on a ticket ?</a></li><li><a title="FAQ055" ="#">My children are travelling alone to family abroad. How do I proceed? And how will the children be accompanied?&nbsp;&nbsp;</a></li><li><a ="/en/contact/faq_all/faq059">What about flying in bad weather ?&nbsp;</a>&nbsp; </li>
</ul>
<p>	<b>Check in</b><br>
</p>
<ul>
	<li><a title="FAQ003" ="/en/contact/faq_all/faq003/">Can I check in online ?</a></li><li><a title="FAQ004" ="/en/contact/faq_all/faq004/">How long before my flight should I arrive at the airport ?</a></li><li><a title="FAQ005" ="/en/contact/faq_all/faq005/">What should I do if I am too late to check in ?</a></li><li><a ="/en/contact/faq_all/faq006/">I arrived too late at check-in owing to circumstances beyond my control. What to do ?</a></li><li><a ="/en/contact/faq_all/faq007/">How much time should I provide to get through security ?</a></li><li><a title="FAQ007" ="/en/contact/faq_all/faq007/">Is there a time-limit to pass through passport control ?</a></li><li><a title="FAQ009" ="#">Is there a time-limit for being present at the gate ?</a></li><li><a title="Fast Lane" ="/en/passngr/at_the_airport/fast_lane/">Can I use&nbsp;Fast Lane ?</a></li>
</ul>
<p style="font-size: 100%; font-weight: bold; text-decoration: underline">
Baggage<br>
</p>
<ul>
	<li><a title="FAQ010" ="/en/contact/faq_all/faq010/">How many pieces of hold baggage am I allowed to take ?</a></li><li><a title="FAQ011" ="/en/contact/faq_all/faq011/">What are the maximum dimensions for hold baggage ?</a></li><li><a title="FAQ012" ="/en/contact/faq_all/faq012/">What is the maximum baggage allowance ?</a></li><li><a title="FAQ013" ="/en/contact/faq_all/faq013/">Where on my ticket is the baggage allowance mentioned ? </a></li><li><a title="FAQ014" ="/en/contact/faq_all/faq014/">How many pieces of hand baggage am I allowed to take ?</a></li><li><a title="FAQ015" ="/en/contact/faq_all/faq015/">What are the maximum dimensions for hand baggage ?</a></li><li><a title="FAQ016" ="/en/contact/faq_all/faq016/">What is the weight allowance for hand baggage ? </a></li><li><a title="FAQ017" ="/en/contact/faq_all/faq017/">Is it possible to take more baggage weight than the allowance mentioned on the ticket ? And how do I proceed ?</a></li><li><a title="FAQ018" ="/en/contact/faq_all/faq018/">Is it possible to take a suitcase of over 32 kg? How should I proceed ? </a></li><li><a title="FAQ019" ="/en/contact/faq_all/faq019/">Can I take outsize baggage (surf board, bike, contrabass, skis, golf bag,) ?</a></li><li><a title="FAQ020" ="/en/contact/faq_all/faq020/">Where do I check in oversize baggage ?</a></li><li><a ="/en/contact/faq_all/faq021/">Can I use internet check-in and still take hold baggage ?</a></li><li><a title="FAQ022" ="/en/contact/faq_all/faq022/">Where do I pay for excess baggage ?</a></li><li><a title="FAQ023" ="/en/contact/faq_all/faq023/">Can I take my cat, dog or other pet as hand baggage ? </a></li><li><a title="FAQ024" ="/en/contact/faq_all/faq024/" style="font-weight: bold">Can I take my cat, dog or other pet as hold baggage?&nbsp;</a>&nbsp;   </li><li><a title="FAQ025" ="/en/contact/faq_all/faq025/">Should / can I lock my hold baggage ? </a></li><li><a ="/en/contact/faq_all/faq027/">Which items may NOT be carried in the hand baggage ?</a></li><li><a title="FAQ028" ="/en/contact/faq_all/faq028/">Which items may NOT be carried in the hold baggage ?</a></li>
</ul>
<p style="font-size: 100%; text-decoration: underline">	<b>Travel documents</b><br>
</p>
<ul>
	<li><a ="/en/contact/faq_all/faq029/">Which identity papers does an adult need to travel abroad ?</a></li><li><a ="/en/contact/faq_all/faq030/">To which countries may I travel with my Belgian identity card?</a></li><li><a title="FAQ031" ="/en/contact/faq_all/faq031/">Which identity papers does a child between 0 and 12 years need to travel?</a></li><li><a title="FAQ032" ="/en/contact/faq_all/faq032/">Which identity papers does a child between 12 and 18 years need to travel?</a></li><li><a title="FAQ033" ="/en/contact/faq_all/faq033/">Which conditions should my identity card meet?</a></li><li><a title="FAQ034" ="/en/contact/faq_all/faq034/">Am I allowed to travel with a temporary identity card?</a></li><li><a ="/en/contact/faq_all/faq035/">Is a Belgian minor still allowed to travel with the white paper identity card?</a></li><li><a title="FAQ036" ="/en/contact/faq_all/faq036/">What are the conditions my passport has to meet ?</a></li><li><a title="FAQ037" ="/en/contact/faq_all/faq037/">Do I need a visa for my trip to ...&nbsp;?</a>&nbsp;   </li><li><a title="FAQ038" ="/en/contact/faq_all/faq038/">What documents do I need to travel to Belgium ? </a></li><li><a title="FAQ039" ="/en/contact/faq_all/faq039/">Do I need a visa for my trip to the USA ?</a></li><li><a title="FAQ040" ="/en/contact/faq_all/faq040/">I'm going to visit several countries. How do I proceed to obtain the necessary visas ?</a></li><li><a title="FAQ041" ="/en/contact/faq_all/faq041/">How/where do I apply for an identity card ?</a></li><li><a title="FAQ042" ="/en/contact/faq_all/faq042/">How/where do I apply for a passport ?</a></li><li><a title="FAQ043" ="/en/contact/faq_all/faq043/">Can I have more than 1 passport ?</a></li><li><a title="FAQ044" ="/en/contact/faq_all/faq044/">How/where should I apply for a visa for my trip to ... ?&nbsp;</a></li><li><a title="FAQ045" ="/en/contact/faq_all/faq045/">How much time does it take to get a new identity card ?</a></li><li><a title="FAQ046" ="/en/contact/faq_all/faq046/">How much time does it take to get a passport ?</a></li><li><a title="FAQ047" ="/en/contact/faq_all/faq047/">How much time does it take to get a visa ?</a></li><li><a title="FAQ048" ="/en/contact/faq_all/faq048/">I do not have the Belgian nationality. Which travel documents do I need to be allowed to travel to... ? </a></li><li><a ="/en/contact/faq_all/faq051/">I urgently need to travel abroad. How much time will it take to get a passport? </a></li><li><a ="/en/contact/faq_all/faq050/">I urgently need to travel abroad. How much time will it take to get a visa ?</a></li>
</ul>
<p style="text-decoration: underline">Cargo
</p>
<ul>
	<li><a title="FAQ054" ="/en/contact/faq_all/faq054/"></a><a ="/en/contact/faq_all/faq054/">I would like to ship some goods as airfreight. How do I go about it and how much will that cost?</a>&nbsp;&nbsp;</li><li style="text-align: left">
		<p dir="ltr" lang="EN"><a title="FAQ056" ="/en/contact/faq_all/faq056/">I would like to ship an unaccompanied pet by plane. How do I proceed?</a>
</p></li><li style="text-align: left">
		<p dir="ltr" lang="EN">			<a ="/en/contact/faq_all/faq056/">I would like to temporarily take some exhibition material to a fair outside the EU. &nbsp;How can I do this without too much red tape? </a>
</p></li>
</ul>
<p style="font-size: 100%; text-decoration: underline">Miscellaneous
</p>
<ul>
	<li><a ="/en/contact/faq_all/faq052/">What can I import in Belgium when I get back from a&nbsp;trip ?</a></li><li><a ="/en/contact/faq_all/faq053/">I am awaiting a postal shipment from abroad. It would have been blocked at Brussels Airport. Where can I get more information ?</a></li><li><a ="/en/contact/faq_all/faq058/">I am taking goods home, outside the European Union. How can I obtain refund of the VAT ?</a></li><li><a ="/en/contact/faq_all/faq060/">How much cash money can I take with me ?</a></li><li><a ="/en/contact/faq_all/faq061/">I suffer from fear of flying. How do I deal with it?</a></li>
</ul></div>








		
		
	
</div>
</div>
</div>
<style type="text/css">footer.ftr {
	color: white;
	font-weight: bold;
	text-align: center;
    padding-top: 10px;
    border-radius: 6px;
    margin-top: 140px;
    background-color: #cc0000;
    position: relative;
    display: block;
    padding: 3px;
}</style>

</div><footer class="ftr"><h4>contact us</h4></footer>
</body>
</html>