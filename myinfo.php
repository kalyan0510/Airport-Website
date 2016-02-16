


<?php  
	session_start();
	
	if(!isset($_SESSION['user']))
		header("Location: lgplz.php");
	if($_SESSION['user']!='employee')
		header("Location: admerr.php");

	/*UPDATE journey SET source=(select destination from journey where journey_id=FLOOR(1001 + RAND() * 80) ) where 1=1;*/
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
#pg:after { content: " "; display: block; clear: both;} 
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
	width: 900px;
	display: inline-block;
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
		<a class="hre" href="Employee.php">Employee</a>
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
		<a href="logout.php" style="margin-left:15px" >Logout</a>
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
		<div class="showhim">
		<a class="mredt" href="employee.php">Employee</a>
		<div class="showme">
			<div class="bott">
				<a class="hi" href="ah.php">Air Hostess</a>
				<a class="hi" href="ta.php">Ticketing Agent</a>
				<a class="hi" href="director.php">Director</a>
				<a class="hi" href="Security.php">Security</a>
			</div>
		</div>
	</div>


	


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
		<h1><?php echo $_SESSION['emp']; ?> </h1>
		
		<?php 
					if($_SESSION['emp']=='AirHostess'){//////////////////////////////////////////////////////////////////////
			echo '<div class="tabb" style="margin:2px;" >';
					if(1)
					{
					
						$sql="select * from person natural join ah_details natural join airhostess ".
				   "where person_id=".$_SESSION['Login']." and ".$_SESSION['Login']."=".$_SESSION['Login'];

				   			
				   			$result = $conn->query($sql);

			  				if ($result->num_rows > 0) {
			  					$row = $result->fetch_assoc();
				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>General:	</b></div>";
				   			echo "<div class='inlp'><b>
				   			Id :</b>".$row['person_id']."</div>";;
				   			echo "<div class='inlp'><b>Name :</b>".$row['name']."</div>";
				   			echo "<div class='inlp'><b> Age :</b>".$row['age']."</div>";
				   			echo "<div class='inlp'><b> Gender :</b>".$row['gender']."</div></div>";


				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Contact:	</b></div>";
				   			echo "<div class='inlp'><b> Phone :</b>".$row['phone']."</div>";
				   			echo "<div class='inlp'><b> Email :</b>".$row['email']."</div></div>";


				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Address:	</b></div>";
				   			echo "<div class='inlp'><b> Street :</b>".$row['street']."</div>";
				   			echo "<div class='inlp'><b> City :</b>".$row['city']."</div>";
				   			echo "<div class='inlp'><b> Country :</b>".$row['country']."</div></div>";

				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Job Details:	</b></div>";
				   			
				   			echo "<div class='inlp'><b> Salary :</b> $".number_format((float)((int)$row['salary']/60),2)."</div></div>";


				   			}
				   			else
				   				echo "Invalid Username or Password";	
					}
				}
				else if($_SESSION['emp']=='Pilot'){///////////////////////////////////////////////////////////
						

		echo '<div class="tabb" style="margin:2px;" >';
				
					if(1)
					if(1)
					{
						$sql="select * from person natural join pilot_details natural join pilot ".
				   "where person_id=".$_SESSION['Login']." and ".$_SESSION['Login']."=".$_SESSION['Login'];

				   			
				   			$result = $conn->query($sql);

			  				if ($result->num_rows > 0) {
			  					$row = $result->fetch_assoc();
				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>General:	</b></div>";
				   			echo "<div class='inlp'><b>Id no. :</b>".$row['person_id']."</div>";;
				   			echo "<div class='inlp'><b>Name :</b>".$row['name']."</div>";
				   			echo "<div class='inlp'><b> Age :</b>".$row['age']."</div>";
				   			echo "<div class='inlp'><b> Gender :</b>".$row['gender']."</div></div>";


				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Contact:	</b></div>";
				   			echo "<div class='inlp'><b> Phone :</b>".$row['phone']."</div>";
				   			echo "<div class='inlp'><b> Email :</b>".$row['email']."</div></div>";


				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Address:	</b></div>";
				   			echo "<div class='inlp'><b> Street :</b>".$row['street']."</div>";
				   			echo "<div class='inlp'><b> City :</b>".$row['city']."</div>";
				   			echo "<div class='inlp'><b> Country :</b>".$row['country']."</div></div>";

				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Job Details:	</b></div>";
				   			echo "<div class='inlp'><b>Experience :</b>".$row['experience']." Yrs</div>";
				   			echo "<div class='inlp'><b> Salary :</b> $".number_format((float)((int)$row['salary']/60),2)."</div></div>";


				   			}
				   			else
				   				echo "Invalid Username or Password";	
					}

				
		echo '</div>';

		echo '<div class="inln">';
		
		
			$result='';

			if(1)
					if(1)
					{

			echo '<p style="font-weight:bold; margin-bottom:15px"></p><h3 style="margin:0px;color:#ff8888">Todays Job to fly :</h3>';	 
			
			$sql = "select * from pilot natural join flies natural join services natural join service_availability natural join pilot_details natural join typer natural join person natural join plane_type natural join  journey where day_avail=dayname(current_timestamp) and person_id=".$_SESSION['Login']." order by departure ;";
				
				
				
			$result = $conn->query($sql);

			  if ($result->num_rows > 0) {
			      // output data of each row
			  	echo '<table class="w3-table-all" style="width:100%">
				  <tbody>
				  <tr>
				  <th>Model</th>
				  <th>Flight</th>
				  <th>Destination</th>
				  <th>Departure</th>
				     
				  
				  </tr>';
			      while($row = $result->fetch_assoc()) {
			          echo  '<tr>
					  <td>'. $row['model_name'].'</td>
					  <td>'. $row["plane_id"].'</td>
					  <td>' .$row["destination"].'</td>    
					  <td>'.$row["departure"].'</td>
					  </tr>';
					    }
					 echo '</tbody></table><br><br>';
			      }else{
			      		echo "<p style='background-color:#cccccc; margin:5px;'>No Jobs Todays</p>";
						
			      }
			  }
			  echo '</div>';

		for($i=1;$i<20;$i++){

			echo '<h3>JOB After '.$i.' Days</h3>';
			echo '<div class="inln">';
		
		
			$result='';

			if(1)
					if(1)
					{

			//echo '<p style="font-weight:bold; margin-bottom:15px"></p><h3 style="margin:0px;color:#ff8888">Todays Job to fly :</h3>';	 
			
			$sql = "select * from pilot natural join flies natural join services natural join service_availability natural join pilot_details natural join typer natural join person natural join plane_type natural join  journey where day_avail=dayname(current_timestamp + INTERVAL ".$i." DAY ) and person_id=".$_SESSION['Login']." order by departure ;";
				
				
				
			$result = $conn->query($sql);
			//echo $sql;
			  if ($result->num_rows > 0) {
			      // output data of each row
			  	echo '<table class="w3-table-all" style="width:100%">
				  <tbody>
				  <tr>
				  <th>Model</th>
				  <th>Flight</th>
				  <th>Destination</th>
				  <th>Departure</th>
				     
				  
				  </tr>';
			      while($row = $result->fetch_assoc()) {
			          echo  '<tr>
					  <td>'. $row['model_name'].'</td>
					  <td>'. $row["plane_id"].'</td>
					  <td>' .$row["destination"].'</td>    
					  <td>'.$row["departure"].'</td>
					  </tr>';
					    }
					 echo '</tbody></table>';
			      }else{
			      		echo "<p style='background-color:#cccccc; margin:5px;'>No Jobs Todays</p>";
						
			      }
			  }
			  echo '</div>';















		}
		
		

				}
				else if($_SESSION['emp']=='Security'){////////////////////////////////////////////////////////
					echo '<div class="tabb" style="margin:2px;" >';
				
				if(1)
					{
						
						$sql="select * from person natural join ss_details natural join security_staff ".
				   "where person_id=".$_SESSION['Login']." and ".$_SESSION['Login']."=".$_SESSION['Login'];

				   			
				   			$result = $conn->query($sql);

			  				if ($result->num_rows > 0) {
			  					$row = $result->fetch_assoc();
				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>General:	</b></div>";
				   			echo "<div class='inlp'><b>Id no. :</b>".$row['person_id']."</div>";;
				   			echo "<div class='inlp'><b>Name :</b>".$row['name']."</div>";
				   			echo "<div class='inlp'><b> Age :</b>".$row['age']."</div>";
				   			echo "<div class='inlp'><b> Gender :</b>".$row['gender']."</div></div>";


				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Contact:	</b></div>";
				   			echo "<div class='inlp'><b> Phone :</b>".$row['phone']."</div>";
				   			echo "<div class='inlp'><b> Email :</b>".$row['email']."</div></div>";


				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Address:	</b></div>";
				   			echo "<div class='inlp'><b> Street :</b>".$row['street']."</div>";
				   			echo "<div class='inlp'><b> City :</b>".$row['city']."</div>";
				   			echo "<div class='inlp'><b> Country :</b>".$row['country']."</div></div>";

				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Job Details:	</b></div>";
				   			
				   			echo "<div class='inlp'><b> Salary :</b> $".number_format((float)((int)$row['salary']/60),2)."</div></div>";


				   			}
				   			else
				   				echo "Invalid Username or Password";	
					}		
				

				
		echo '</div>';
				}
				else if($_SESSION['emp']=='TicketAgent'){////////////////////////////////////////////////////////////////
					echo '<div class="tabb" style="margin:2px;" >';
				
					
					if(1)
					{
						
						$sql="select * from person natural join ta_details natural join ticket_agent ".
				   "where person_id=".$_SESSION['Login']." and ".$_SESSION['Login']."=".$_SESSION['Login'];

				   			
				   			$result = $conn->query($sql);

			  				if ($result->num_rows > 0) {
			  					$row = $result->fetch_assoc();
				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>General:	</b></div>";
				   			echo "<div class='inlp'><b>Id no. :</b>".$row['person_id']."</div>";;
				   			echo "<div class='inlp'><b>Name :</b>".$row['name']."</div>";
				   			echo "<div class='inlp'><b> Age :</b>".$row['age']."</div>";
				   			echo "<div class='inlp'><b> Gender :</b>".$row['gender']."</div></div>";


				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Contact:	</b></div>";
				   			echo "<div class='inlp'><b> Phone :</b>".$row['phone']."</div>";
				   			echo "<div class='inlp'><b> Email :</b>".$row['email']."</div></div>";


				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Address:	</b></div>";
				   			echo "<div class='inlp'><b> Street :</b>".$row['street']."</div>";
				   			echo "<div class='inlp'><b> City :</b>".$row['city']."</div>";
				   			echo "<div class='inlp'><b> Country :</b>".$row['country']."</div></div>";

				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Job Details:	</b></div>";
				   			echo "<div class='inlp'><b>Experience :</b>".$row['experience']." Yrs</div>";
				   			echo "<div class='inlp'><b> Salary :</b> $".number_format((float)((int)$row['salary']/60),2)."</div></div>";


				   			}
				   			else
				   				echo "Invalid Username or Password";	
					}

				
					echo '</div>';
				}
				else if($_SESSION['emp']=='Director'){//////////////////////////////////////////////////////////
					echo '<div class="tabb" style="margin:2px;" >';
				
					if(1)
					{
						
						$sql="select * from person natural join director_details natural join director ".
				   "where person_id=".$_SESSION['Login']." and ".$_SESSION['Login']."=".$_SESSION['Login'];

				   			
				   			$result = $conn->query($sql);

			  				if ($result->num_rows > 0) {
			  					$row = $result->fetch_assoc();
				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>General:	</b></div>";
				   			echo "<div class='inlp'><b>Id no. :</b>".$row['person_id']."</div>";;
				   			echo "<div class='inlp'><b>Name :</b>".$row['name']."</div>";
				   			echo "<div class='inlp'><b> Age :</b>".$row['age']."</div>";
				   			echo "<div class='inlp'><b> Gender :</b>".$row['gender']."</div></div>";


				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Contact:	</b></div>";
				   			echo "<div class='inlp'><b> Phone :</b>".$row['phone']."</div>";
				   			echo "<div class='inlp'><b> Email :</b>".$row['email']."</div></div>";


				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Address:	</b></div>";
				   			echo "<div class='inlp'><b> Street :</b>".$row['street']."</div>";
				   			echo "<div class='inlp'><b> City :</b>".$row['city']."</div>";
				   			echo "<div class='inlp'><b> Country :</b>".$row['country']."</div></div>";

				   			echo "<div style='display: -webkit-flex;'><div style='display:block; margin-left:25px;color:Blue;'><b>Job Details:	</b></div>";
				   			echo "<div class='inlp'><b>Experience :</b>".$row['experience']." Yrs</div>";
				   			echo "<div class='inlp'><b> Salary :</b> $".number_format((float)((int)$row['salary']/60),2)."</div></div>";


				   			}
				   			else
				   				echo "Invalid Username or Password";	
					}

					

				
					echo '</div>';
				}
				?>
		</div>







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