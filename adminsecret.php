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
session_start();

if(!isset($_SESSION['user']))
exit("<h1>Needed Permissions</h1>");
if(isset($_SESSION['user'])){
	if($_SESSION['user']!='admin')
		exit("<h1>Needed Permissions</h1>");
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
<style type="text/css">
#pg:after { content: " ";  display: block; clear: both;} 
#pd:after { content: " "; display: block; clear: both;} 
#pgwrap{
	position: relative;
	display: block;
	width: 1220px;
	height:auto;
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
a.xredt:hover{
	text-decoration: underline;
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
footer.ftr {
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
.inl{
	border-radius: 5px;
	position: relative;
	display: inline;
	float: left;
	margin-right: 100px;
	background: #dfdfdf	;
	padding: 12px;
}
.inln{
	position: relative;
	display: block;
	float: left;
	border-radius: 5px;
	width: 990px;
	padding: 5px;
	
}
.inli{
	position: relative;
	display: inline;
	float: left;
	border-radius: 2px;
	padding: 5px;
	
}
</style>
<style type="text/css">
  .w3-table-all{border:1px solid #ccc}
.w3-bordered tr,.w3-table-all tr{border-bottom:1px solid #d0d0d0}
.w3-striped tbody tr:nth-child(even){background-color:#f2f2f2}
.w3-table-all tr:nth-child(odd){background-color:#fff}
.w3-table-all tr:nth-child(even){background-color:#f2f2f2}
.w3-table-all tr:nth-child(1){background-color:#ababab; border-top-right-radius: 5px;border-top-left-radius-radius: 5px;}
.w3-hoverable tbody tr{transition:background-color .25s ease}
.w3-hoverable tbody tr:hover{background-color:#f2f2f2}
.w3-centered tr th,.w3-centered tr td{text-align:center; }
.w3-table td,.w3-table th,.w3-table-all td,.w3-table-all th{padding:6px 8px;display:table-cell;text-align:left;vertical-align:top}
.w3-table th:first-child,.w3-table td:first-child,.w3-table-all th:first-child,.w3-table-all td:first-child{padding-left:16px; }
a.s{
	margin-left: 10px;
}
a.s:hover{
	text-decoration: underline;
	
}
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
		<a class="hred" href="admin.php">Admin</a>
		<a style="color:white" ><?php echo "Logged in as : ".$_SESSION['user']."    ";?></a>
		<a href="logout.php" class="s">Logout</a>
	</li>
</ul>

</div>
<div id="pg">
<div id="leftt">


	

		<div class="showhim">
		<a class="mredt" href="passengers.php">passengers</a>
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
				<a class="hi" href="Heavy_s.php">Heavy Shipments</a>
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
		<script type="text/javascript">
			$('input[name=tab]').change(function(){
     			$('form').submit();	
			});
		</script>
	<form action="adminsecret.php" method="post">
		<b>Action</b><br>
		<div class="inl">

			<input type="radio" value='select' name="si" <?php if(!isset($_POST['si'])||$_POST['si']=='select') echo 'checked'; ?>>Display items<br>
			<input type="radio" value='insert' name="si" <?php if(isset($_POST['si'])&&$_POST['si']=='insert') echo 'checked'; ?>>Add items<br>
			<input type="radio" value='delete' name="si" <?php if(isset($_POST['si'])&&$_POST['si']=='delete') echo 'checked'; ?>>Delete items<br>
			<input type="radio" value='update' name="si" <?php if(isset($_POST['si'])&&$_POST['si']=='update') echo 'checked'; ?>>Update info.
		</div>
		<b>Items</b><br>
		<div class="inl">

			<input type="radio"  value='person' name="tab" <?php if(!isset($_POST['tab'])||$_POST['tab']=='person') echo 'checked'; ?>>Person<br>
			<input type="radio" value='plane' name="tab" <?php if(isset($_POST['tab'])&&$_POST['tab']=='plane') echo 'checked'; ?>>Plane<br>
			<input type="radio" value='airlines' name="tab" <?php if(isset($_POST['tab'])&&$_POST['tab']=='airlines') echo 'checked'; ?>>Airlines<br>
			<input type="radio" value='pilot' name="tab" <?php if(isset($_POST['tab'])&&$_POST['tab']=='pilot') echo 'checked'; ?>>pilot<br>
			<input type="radio" value='airhostess' name="tab" <?php if(isset($_POST['tab'])&&$_POST['tab']=='airhostess') echo 'checked'; ?>>Airhostess<br>
			<input type="radio" value='complaints' name="tab" <?php if(isset($_POST['tab'])&&$_POST['tab']=='complaints') echo 'checked'; ?>>Complaints<br>
			<input type="radio" value='director' name="tab" <?php if(isset($_POST['tab'])&&$_POST['tab']=='director') echo 'checked'; ?>>Director<br>
			<input type="radio" value='journey' name="tab" <?php if(isset($_POST['tab'])&&$_POST['tab']=='journey') echo 'checked'; ?>>Journey<br>
			<input type="radio" value='security_Staff' name="tab" <?php if(isset($_POST['tab'])&&$_POST['tab']=='security_Staff') echo 'checked'; ?>>Security Staff<br>
			<input type="radio" value='services' name="tab" <?php if(isset($_POST['tab'])&&$_POST['tab']=='services') echo 'checked'; ?>>Services<br>
			<input type="radio" value='ticket_agent' name="tab" <?php if(isset($_POST['tab'])&&$_POST['tab']=='ticket_agent') echo 'checked'; ?>>Ticketing Agent<br>

		
			
		

		</div>
		<style type="text/css">
		.inlil{
			border-radius: 15px;
			background-color: #aaddee;
			text-align: center;
			width: 300px;
			padding: 10px;
			margin: 5px;	
			font-weight: bold;
			display: inline-block;
		}
		h2{
			margin: 0px;
		}
		.inlny {
					display: inline-block;
				    
				}
		</style>
		<div class="inln">
			
			<button name="sub1" type="submit" value="sub1">Perform Action</button>
		</div>
	</form>

	<div class="inlny">
		<form action="adminsecret.php" method="post">
		<?php
		$tab='';
			if(isset($_POST['sub1']))
			if(isset($_POST['tab']))
			if($_POST['si']=='select'){
				if($_POST['tab']=='pilot'){
					$sql="select * from pilot natural join person natural join pilot_details";
				}else if($_POST['tab']=='airhostess'){
					$sql="select * from airhostess natural join person natural join ah_details";
				}else if($_POST['tab']=='director'){
					$sql="select * from director natural join person natural join director_details";
				}else if($_POST['tab']=='security_Staff'){
					$sql="select * from security_Staff natural join person natural join ss_details";
				}else if($_POST['tab']=='ticket_agent'){
					$sql="select * from ticket_agent natural join person natural join ta_details";
				}else {
					$sql='select * from '.$_POST['tab'];
				}




					$x;
				//echo $sql."<br>";
				$result=$conn->query($sql);
				if($result->num_rows > 0){
					$row = $result->fetch_assoc();
					$x=array_keys($row);
					echo "<input style='display:none' type='checkbox' value='".$_POST['tab']."' name='tab' checked>";
					echo "<input style='display:none' type='checkbox' value='".$_POST['si']."' name='si' checked>";
					for($i=0;$i<sizeof($x);$i++){
					echo "<div class='inli'>";
					//echo "<input type='checkbox' value='".$x[$i]."' name='CL[]' checked>".$x[$i];
					echo "</div>";
					}

					
				}
				$result = $conn->query($sql);

			  if ($result->num_rows > 0) {
			      // output data of each row
			  	echo "<div class='inln'>";
			  	echo '<table class="w3-table-all" style="width:100%">
				  <tbody>
				  <tr title="'.$sql.'">';
				  /*<th>Arrival</th>
				  <th>Airline</th>
				  <th>Flight</th>
				  <th>destination</th>
				  <th>Departure</th> */  
				  for($i=0;$i<sizeof($x);$i++){
				  	echo '<th>'.$x[$i].'</th>';
				  }
				  

				  echo '</tr>';
			      while($row = $result->fetch_assoc()) {
			      		
			          echo  '<tr>';
			           for($i=0;$i<sizeof($x);$i++){
						  	
						  	echo '<td>'.$row[$x[$i]].'</td>';
					
						}
					  
					  echo '</tr>';
					    }
					 
			      }else{
			      		echo "no results";
						
			      }

			      echo '</tbody></table>';
 					echo "</div>";












			}
			else if($_POST['si']=='insert'){
				echo '<h1>Enter Details</h1>';
				if($_POST['tab']=='pilot'||$_POST['tab']=='director'||$_POST['tab']=='ticket_agent'||$_POST['tab']=='airhostess'||$_POST['tab']=='security_Staff'){
						echo "<div class='inlil'>";
						echo '<br>'.'PersonId'.'<br>';
						echo "<input type='textbox'  name='pers' >";
						echo "</div>";														

				}

					$sql="select * from ".$_POST['tab'].";";
				//echo $sql."<br>";
				$result=$conn->query($sql);
				if($result->num_rows > 0){
					$row = $result->fetch_assoc();
					$x=array_keys($row);
					echo "<input style='display:none' type='checkbox' value='".$_POST['tab']."' name='tab' checked>";
					echo "<input style='display:none' type='checkbox' value='".$_POST['si']."' name='si' checked>";
					for($i=0;$i<sizeof($x);$i++){
						echo "<div class='inlil'>";
						echo '<br><h2>'.$x[$i].'</h2><br>';
						echo "<input type='textbox'  name='CL[]' >";
						echo "</div>";
					}
				}


			}
			else if($_POST['si']=='delete'){
				$sql="select * from ".$_POST['tab'].";";
				echo $sql."<br>";
				$result=$conn->query($sql);
				if($result->num_rows > 0){
					$row = $result->fetch_assoc();
					$x=array_keys($row);
					echo "<input style='display:none' type='checkbox' value='".$_POST['tab']."' name='tab' checked>";
					echo "<input style='display:none' type='checkbox' value='".$_POST['si']."' name='si' checked>";
					for($i=0;$i<sizeof($x);$i++){
					echo "<div class='inli'>";
					echo '<br>'.$x[$i].'<br>';
					echo "<input style='display:none' type='checkbox' value='".$x[$i]."' name='CLN[]' checked>";
					echo "<input type='textbox'  name='CL[]'>";
					echo "</div>";
					}
				}
			}
			else if($_POST['si']=='update'){
				$sql="select * from ".$_POST['tab'].";";
				echo "<p><b>Condition</b> where</p>";
				$result=$conn->query($sql);
				if($result->num_rows > 0){
					$row = $result->fetch_assoc();
					$x=array_keys($row);

					echo "<input style='display:none' type='checkbox' value='".$_POST['tab']."' name='tab' checked>";
					echo "<input style='display:none' type='checkbox' value='".$_POST['si']."' name='si' checked>";
					echo "<div style='display:block; height=100px' id='pd'>";
					for($i=0;$i<sizeof($x);$i++){
					echo "<div class='inli'>".$x[$i];
					//echo '<br>'.$x[$i].'<br>';
					echo "<br><input style='display:none' type='checkbox' value='".$x[$i]."' name='CLN[]' checked>";
					echo "<input type='textbox'  name='CL[]'><br>";
					echo "</div>";
					}
					echo "</div>";
					echo "<p><b>Values</b> to be Replaced</p>";
					echo "<div style='display:block; height=100px' id='pd'>";
					for($i=0;$i<sizeof($x);$i++){
					echo "<div class='inli'>".$x[$i];
					//echo '<br>'.$x[$i].'<br>';
					echo "<br><input style='display:none' type='checkbox' value='".$x[$i]."' name='CLN[]' checked>";
					echo "<input type='textbox'  name='TBR[]'><br>";
					echo "</div>";
					}
					echo "</div>";
				}


			}
			
		?>	
		<?php
		if(isset($_POST['tab'])&&isset($_POST['si'])&&$_POST['si']!='select')
		echo '<div class="inln">
			
			<button name="sub2" type="submit" value="sub2">Generate Query and Run</button>
		</div>';

		?>
		
	</form>



	</div>
	<?php
		if(isset($_POST['sub2'])){
			if($_POST['si']=='select'){
			$sql="select ";
			$disp ="Displaying :";
			for($i=0;$i<sizeof($_POST['CL']);$i++){
				if($i!=0)
					$sql.=',';
				$disp.= " ".$_POST['CL'][$i].", ";
				$sql.='  '.$_POST['CL'][$i];
			}
			$sql.=' from '.$_POST['tab'];
			$disp.='of '.$_POST['tab'].'</b>';
			//echo $sql;
		

			echo "<div class='inln'>";
			 echo '<p style="font-weight:bold; margin-bottom:0px">Note:</p><p style="margin:0px;color:#ff8888">Hover on Table Attribute names to see SQL query</p>';
		
			
			echo '<b>'.$disp.'</b>';
			//echo $sql;
		$result = $conn->query($sql);

			  if ($result->num_rows > 0) {
			      // output data of each row
			  	
			  	echo '<table class="w3-table-all" style="width:100%">
				  <tbody>
				  <tr title="'.$sql.'">';
				  /*<th>Arrival</th>
				  <th>Airline</th>
				  <th>Flight</th>
				  <th>destination</th>
				  <th>Departure</th> */  
				  for($i=0;$i<sizeof($_POST['CL']);$i++){
				  	echo '<th>'.$_POST['CL'][$i].'</th>';
				  }
				  

				  echo '</tr>';
			      while($row = $result->fetch_assoc()) {
			      		
			          echo  '<tr>';
			           for($i=0;$i<sizeof($_POST['CL']);$i++){
						  	
						  	echo '<td>'.$row[$_POST['CL'][$i]].'</td>';
					
						}
					  
					  echo '</tr>';
					    }
					 
			      }else{
			      		echo "no results";
						
			      }

			      echo '</tbody></table>';
 					echo "</div>";

			 }
			 else if($_POST['si']=='insert'){
			 	echo "<div >";
			 	$sql="INSERT INTO ".$_POST['tab']." VALUES(";

				//echo "<br>".$sql."<br>";
			 	for($i=0;$i<sizeof($_POST['CL']);$i++){
					if($i!=0)
					$sql.=',';
					if(isset($_POST['CL'][$i])&&$_POST['CL'][$i]!='')
					$sql.='  "'.$_POST['CL'][$i].'"';
					else
						$sql.=' '.'NULL';
				}
				$sql.=");";
	
					echo "<b>".$sql."</b>";
				if($conn->query($sql)==true){
					//echo "<br>Successfully inserted the values";
				}	
				else
				{
					echo "<br>Insertion unsuccessful <br>".$conn->error;
				}		
				

					if($_POST['tab']=='pilot'||$_POST['tab']=='director'||$_POST['tab']=='ticket_agent'||$_POST['tab']=='airhostess'||$_POST['tab']=='security_Staff'){
						
						$sql="INSERT into ";
				if($_POST['tab']=='pilot')
					$sql.=' pilot_details ';
				else if($_POST['tab']=='airhostess')
					$sql.=' ah_details ';
				else if($_POST['tab']=='ticket_agent')
					$sql.=' ta_details ';
				else if($_POST['tab']=='security_Staff')
					$sql.=' ss_details ';
				else if($_POST['tab']=='director')
					$sql.=' director_details ';

				$sql.='values( '.$_POST['CL'][0].','.$_POST['pers'].')';
				//echo $sql;
				if($conn->query($sql)==true){
					echo "<br>Successfully inserted the values";
				}	
				else
				{
					echo "<br>Insertion unsuccessful <br>".$conn->error;
				}															

				}


				echo "</div>";

			 }
			 else if($_POST['si']=='delete'){
			 		echo "<div class='inln'>";
			 	$sql="DELETE FROM ".$_POST['tab']." where ";

			 	$and=0;
			 	for($i=0;$i<sizeof($_POST['CL']);$i++){
					if($and!=0&&$_POST['CL'][$i]!='')
					{$sql.=' and ';}
					if($_POST['CL'][$i]!='')
					{
						$sql.=$_POST['CLN'][$i].'='.$_POST['CL'][$i];
						$and=1;
						}
				}
				$sql.=" ;";
	
					echo "<b>".$sql."</b>";
				if($conn->query($sql)==true){
					echo "<br>Successfully Deleted the values";
				}	
				else
				{
					echo "<br>Deletion unsuccessful";
					echo $sql;
				}		
				echo '<br>'.$conn->error;

				echo "</div>";




			 }
			 else if($_POST['si']=='update'){
			 	echo "<div class='inln'>";
			 	$sql="UPDATE ".$_POST['tab']." SET ";

			 	$and=0;
			 	for($i=0;$i<sizeof($_POST['TBR']);$i++){
					if($and!=0&&$_POST['TBR'][$i]!='')
					{$sql.=' , ';}
					if($_POST['TBR'][$i]!='')
					{
						$sql.=$_POST['CLN'][$i]."='".$_POST['TBR'][$i]."'";
						$and=1;
						}
				}









			 	$sql.=" where ";

			 	$and=0;
			 	for($i=0;$i<sizeof($_POST['CL']);$i++){
					if($and!=0&&$_POST['CL'][$i]!='')
					{$sql.=' and ';}
					if($_POST['CL'][$i]!='')
					{
						$sql.=$_POST['CLN'][$i]."='".$_POST['CL'][$i]."'";
						$and=1;
						}
				}
				$sql.=" ;";
	
					echo "<b>".$sql."</b>";
				if($conn->query($sql)==true){
					echo "<br>Successfully Updated the values";
				}	
				else
				{
					echo "<br>Deletion unsuccessful";
					echo $sql;
				}		
				echo '<br>'.$conn->error;

				echo "</div>";


			 }



			}


















	?>




<div class="inl" style='border-radius:25px'>


	<div class="inln">

	<?php
		echo '<h2>Developer Options</h2><br><br>';
		if(isset($_POST['deve']))
		$XXX=$_POST['deve'];
		else 
		$XXX='close';
		if($XXX=='close')
		{
			echo '<form action="adminsecret.php" method="post"><button name="deve" value="open">Toggle Developer Box</Button></form>';
		}else
		if($XXX=='open'){
			echo '<form action="adminsecret.php" method="post"><button name="deve" value="close">Toggle Developer Box</Button></form>';
		}
		
	?>


	
	
		<?php
			if($XXX=='open')
		echo '<b>Enter any Query</b>		
		<form action="adminsecret.php" style="margin-bottom:0px" method="post">
			<textarea name="query" rows="2" cols="80" required>'.'Select * from person'.'</textarea>
			<input type="submit" name="subq">
		</form>';

		?>
	<div class="inln">

	<?php
		if(isset($_POST['subq']))
		{
			
			$sql=$_POST['query'];
			if($result=$conn->query($_POST['query'])){
				echo "Query successful<br>";
			}
			else
				echo "Query unsuccessful<br>".$conn->error;
			if(substr($_POST['query'], 0,6)=='select'||substr($_POST['query'], 0,6)=='Select'){
					echo $result->num_rows." results";
					if($result->num_rows>0){
						echo '<table class="w3-table-all" style="width:100%">
				  <tbody>
				  <tr title="'.$sql.'">';
				  		$res=$result;
				  		$row=mysqli_fetch_assoc($result);
				  		$keys=array_keys($row);
				  		for($i=0;$i<sizeof($row);$i++){
				  			echo '<th>'.$keys[$i].'</th>';
				  		}
				  	echo '</tr>';
				  		mysqli_data_seek($result,0);
						while ($row=$result->fetch_assoc()) {
							echo "<tr>";
							for($i=0;$i<sizeof($row);$i++){
				  			echo '<td>'.$row[$keys[$i]].'</td>';
				  			}
				  			echo "</tr>";
						}
						echo "</tbody></table>";
					}
			}

		}

	?>
	</div>
	</div>
	<div class="inln">
	<a href="http://localhost:8000/sqlbuddy/#page=dboverview&db=airport&topTabSet=1"><button  type="submit" value="sub1">Advanced Options</button></a>
	</div>

</div>

	

	
</div>

</div>

</div>

</body>
<div>
<footer class="ftr"><h4>contact us</h4></footer>
</div>
</html>