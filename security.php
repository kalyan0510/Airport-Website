<?php 
	session_start();
?>


<!DOCTYPE <!DOCTYPE html>
<html>
<head>

	<title>Beijing Airport </title>
</head>
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
$x=isset($_POST['plane_id'])?$_POST['plane_id']:'none';
if($x=='none')
	$_POST['plane_id']='plane_id';
$x=isset($_POST['destination'])?$_POST['destination']:'none';
if($x=='none')
	$_POST['destination']='destination';
$_POST['jday']=isset($_POST['jday'])?$_POST['jday']:date('y:m:d');
if($_POST['jday']==""){
	$_POST['jday']=date('y-m-d');
}
$x=isset($_POST['sortby'])?$_POST['sortby']:'plane_id';
if($x=='plane_id')
	$_POST['sortby']='plane_id';
?>
<style type="text/css">
#pgwrap{
	position: relative;
	display: block;
	width: 1220px;
	min-height: 100%;
}
#pg:after { content: " "; display: block; clear: both;} 
#pg{
	display: -webkit-flex;
	position: relative;
	-webkit-align-items:strech;

}
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
.inl{
	border-radius: 5px;
	position: relative;
	display: inline;
	float: left;
	margin-right: 100px;
	background: #c0c0c0	;
}
.inlp{
	border-radius: 5px;
	position: relative;
	display: inline;
	float: left;
	margin: 5px;
	margin-left:30px;
	margin-right: 10px;

	
}
.inln{
	position: relative;
	display: block;
	float: left;
	border-radius: 5px;
	width: 990px;

	
}
.tabb{
	padding: 5px;
	position: relative;
	display: block;
	margin: 12px;
	float: left;
	border-radius: 12px;
	border-color: rgb(250,12,21);
	border-style: dashed;
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
		<a class="hred" href="Employee.php">Employee</a>
		<a class="hre" href="contact_us.php">Contact Us</a>
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
				<a class="hi" href="time_p.php">Time tab le</a>
				<a class="hi" href="contact_us.php">Help</a>
			</div>
		</div>
	</div>
	<div class="showhim">
		<a class="mredt" href="cargo.php">Cargo</a>
		<div class="showme">
			<div class="bott">
				<a class="hi" href="flight_c.php">Flight Info</a>
				<a class="hi" href="Heavy_s.php">Heavy Shipments</a>
				<a class="hi" href="time_c.php">Time Table</a>
				<a class="hi" href="contact_us.php">Help</a>
			</div>
		</div>
	</div>

	<div class="redt">Employee</div>
	<div class="bott">
		<a class="hi" href="pilot.php">Pilot</a>
				<a class="hi" href="ah.php">Air Hostess</a>
				<a class="hi" href="ta.php">Ticketing Agent</a>
				<a class="hi" href="director.php">Director</a>
				<a class="hi" href="Security.php">Security</a>
	</div>

	<a class="xredt" href="myinfo.php">My Info</a>


	<div class="showhim" href="bla.php">
		<a class="mredt" href="contact_us.php">Contact us</a>
		<div class="showme">
			<div class="bott">
				<a class="hi" href="GI.php">General Inquiry</a>
				<a  class="hi" href="FAQ.php">FAQs</a>
				<a  class="hi" href="complaint.php">Complaints</a>
			</div>
		</div>
	</div>

	
		<a class="xredt" href="admin.php">admin</a>
		


</div>

<div id="midd">
<h2>Security Staff</h2>
<?php
	$sql="select * from security_staff natural join ss_details natural join person";
		$result = $conn->query($sql);

			  if ($result->num_rows > 0) {
			      // output data of each row
			  	echo '<table class="w3-table-all" style="width:100%">
				  <tbody>
				  <tr>
				  <th>person_id</th>
				  <th>name</th>
				  <th>phone</th>
				  <th>country</th>
				     
				  
				  </tr>';
			      while($row = $result->fetch_assoc()) {
			          echo  '<tr>
					  <td>'. $row['person_id'].'</td>
					  <td>'. $row["name"].'</td>
					  <td>' .$row["phone"].'</td>    
					  <td>'.$row["country"].'</td>
					  </tr>';
					    }
					 
			      }else{
			      		echo "<p style='background-color:#cccccc; margin:5px;'>No Jobs Todays</p>";
						
			      }
					echo '</tbody></table>';	  
			?>
		
		







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