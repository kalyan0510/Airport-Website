
<?php
	session_start();
	session_destroy();
	$_POST['sub']=isset($_POST['sub'])? $_POST['sub'] :' ';
	if($_POST['sub']=='admin'&&$_POST['pass']=='kalyan'){
		session_start();
		$_SESSION['user']='admin';
		header('Location: http://localhost:8000/ap/adminsecret.php');
	}else if($_POST['sub']=='emp'&&$_POST['pass']==$_POST['id']){
		session_start();
		$_SESSION['user']='employee';
		$_SESSION['emp']=$_POST['emp'];
		$_SESSION['Login']=$_POST['pass'];
		header('Location: http://localhost:8000/ap/myinfo.php');
	}
	elseif ($_POST['sub']=='pub') {
		session_start();
		$_SESSION['user']=$_POST['pass'];
		header('Location: http://localhost:8000/ap/passengers.php');
	}
/*	else {
		session_start();
		session_destroy();
	}*/
?>

<!DOCTYPE <!DOCTYPE html>
<?php

$_POST['pass']=isset($_POST['pass'])? $_POST['pass'] : 	'__';

	
	
 ?>
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



?>
<style type="text/css">
#pg:after { content: " "; display: block; clear: both;} 
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
body { 
        	 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
}
</style> 



<body background="giphy.gif" style="background-repeat:no-repeat">
<div id="pgwrap">
<div id="hdr">
<a href="passengers.php"><img class="logo" src="favicon.ico" height=40px width=60px ></img></a>
<div id="HDLN"><h1 style="color:#ffffff">Beijing AIRPORT</h1></div>
<ul class="hd">
	<li class="hd">
    	<hr>
	</li>
</ul>


</div>
<style type="text/css">
	
	.redt{
	background: #aaaaaa;
	border-radius: 15px;
	border-bottom-left-radius:0px;
	border-bottom-right-radius: 0px; 
	padding: 5px;
	
	height: 45px;
	width: 500px;
	color: #000000;
	margin-left: 400px;
	text-align: center;
	
	margin-top: 20px;
	 cursor: pointer;
}
.bott{
	margin-left: 400px;
	width: 500px;
	height: 85px;
	background: #eeeeee;
	border-radius: 15px;
	border-top-left-radius:0px;
	border-top-right-radius: 0px; 
	padding: 5px;
	text-align: center;

	margin-bottom: 25px;
}
.styl{
	margin: 5px;
}
</style>

<div class="redt"><h2>Public users</h2></div>
<div class="bott">
	Name
	<form action="hmpg.php" method="post">
	<input class='styl' type="text" name="pass">
	<button name="sub" type="submit" value="pub">Submit</button>
	</form>
</div>


<div class="redt"><h2>Employee</h2></div>
<div style="height:145px"class="bott">
	
	<form action="hmpg.php" method="post">
	Category
	<select class="styl" style="width:169px" name="emp">
		<option >
			Pilot
		</option>
		<option >
			AirHostess
		</option>
		<option >
			TicketAgent
		</option>
		<option >
			Director
		</option>
		<option >
			Security
		</option>
	</select>
	<br>
	userId
	<input class='styl' type="text" name="id"><br>
	password
	<input class='styl' type="password" name="pass"><br>
	<button name="sub" type="submit" value="emp">Login</button>
	</form>
	<?php
	if(isset($_POST['id']))
	if($_POST['pass']!=$_POST['id']){
		echo 'Invalid Username / Password';
	}
	?>
	

</div>
<div class="redt"><h2>Admin Login</h2></div>
<div class="bott">
	Password
	<form action="hmpg.php" method="post">
	<input class='styl' type="password" name="pass">
	<button name="sub" type="submit" value="admin">Login</button>
	</form>
</div>


</div>

</body>
<footer class="ftr" style="margin-top:250px	;margin-bottom:0px"><h4>contact us</h4></footer>
</html>