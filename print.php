<?php	SESSION_start();	

$useruid = $_SESSION['uid'];


?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="script.js"></script>
		<style>
		/* reset */

*
{
	border: 0;
	box-sizing: content-box;
	color: inherit;
	font-family: inherit;
	font-size: inherit;
	font-style: inherit;
	font-weight: inherit;
	line-height: inherit;
	list-style: none;
	margin: 0;
	padding: 0;
	text-decoration: none;
	vertical-align: top;
}

/* content editable */

*[contenteditable] { border-radius: 0.25em; min-width: 1em; outline: 0; }

*[contenteditable] { cursor: pointer; }

*[contenteditable]:hover, *[contenteditable]:focus, td:hover *[contenteditable], td:focus *[contenteditable], img.hover { background: #DEF; box-shadow: 0 0 1em 0.5em #DEF; }

span[contenteditable] { display: inline-block; }

/* heading */

h1 { font: bold 100% sans-serif; letter-spacing: 0.5em; text-align: center; text-transform: uppercase; }

/* table */

table { font-size: 75%; table-layout: fixed; width: 100%; }
table { border-collapse: separate; border-spacing: 2px; }
th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
th, td { border-radius: 0.25em; border-style: solid; }
th { background: #EEE; border-color: #BBB; }
td { border-color: #DDD; }

/* page */

html { font: 16px/1 'Open Sans', sans-serif; overflow: auto; padding: 0.5in; }
html { background: #999; cursor: default; }

body { box-sizing: border-box; height: 11in; margin: 0 auto; overflow: hidden; padding: 0.5in; width: 8.5in; }
body { background: #FFF; border-radius: 1px; box-shadow: 0 0 1in -0.25in rgba(0, 0, 0, 0.5); }

/* header */

header { margin: 0 0 3em; }
header:after { clear: both; content: ""; display: table; }

header h1 { background: #000; border-radius: 0.25em; color: #FFF; margin: 0 0 1em; padding: 0.5em 0; }
header address { float: left; font-size: 75%; font-style: normal; line-height: 1.25; margin: 0 1em 1em 0; }
header address p { margin: 0 0 0.25em; }
header span, header img { display: block; float: right; }
header span { margin: 0 0 1em 1em; max-height: 25%; max-width: 60%; position: relative; }
header img { max-height: 100%; max-width: 100%; }
header input { cursor: pointer; -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)"; height: 100%; left: 0; opacity: 0; position: absolute; top: 0; width: 100%; }

/* article */

article, article address, table.meta, table.inventory { margin: 0 0 3em; }
article:after { clear: both; content: ""; display: table; }
article h1 { clip: rect(0 0 0 0); position: absolute; }

article address { float: left; font-size: 125%; font-weight: bold; }

/* table meta & balance */

table.meta, table.balance { float: right; width: 36%; }
table.meta:after, table.balance:after { clear: both; content: ""; display: table; }

/* table meta */

table.meta th { width: 40%; }
table.meta td { width: 60%; }

/* table items */

table.inventory { clear: both; width: 100%; }
table.inventory th { font-weight: bold; text-align: center; }

table.inventory td:nth-child(1) { width: 26%; }
table.inventory td:nth-child(2) { width: 38%; }
table.inventory td:nth-child(3) { text-align: right; width: 12%; }
table.inventory td:nth-child(4) { text-align: right; width: 12%; }
table.inventory td:nth-child(5) { text-align: right; width: 12%; }

/* table balance */

table.balance th, table.balance td { width: 50%; }
table.balance td { text-align: right; }

/* aside */

aside h1 { border: none; border-width: 0 0 1px; margin: 0 0 1em; }
aside h1 { border-color: #999; border-bottom-style: solid; }

/* javascript */

.add, .cut
{
	border-width: 1px;
	display: block;
	font-size: .8rem;
	padding: 0.25em 0.5em;	
	float: left;
	text-align: center;
	width: 0.6em;
}

.add, .cut
{
	background: #9AF;
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	background-image: -moz-linear-gradient(#00ADEE 5%, #0078A5 100%);
	background-image: -webkit-linear-gradient(#00ADEE 5%, #0078A5 100%);
	border-radius: 0.5em;
	border-color: #0076A3;
	color: #FFF;
	cursor: pointer;
	font-weight: bold;
	text-shadow: 0 -1px 2px rgba(0,0,0,0.333);
}

.add { margin: -2.5em 0 0; }

.add:hover { background: #00ADEE; }

.cut { opacity: 0; position: absolute; top: 0; left: -1.5em; }
.cut { -webkit-transition: opacity 100ms ease-in; }

tr:hover .cut { opacity: 1; }

@media print {
	* { -webkit-print-color-adjust: exact; }
	html { background: none; padding: 0; }
	body { box-shadow: none; margin: 0; }
	span:empty { display: none; }
	.add, .cut { display: none; }
}

@page { margin: 0; }
		</style>
		
	</head>
	<body>
	
	
	
	
	<!-- <?php
	$con = mysqli_connect("localhost", "root", "", "dk");
	// $_SESSION_start();

	
	$useruid = $_SESSION['uid'];
	$con=mysqli_connect("localhost","root","","dk");
			$q="select * from Appoint";
			$c=mysqli_query($con,$q);
			
			$sql = ("select name,email from registration where id in(select user_id from appoint)");
			$res=$con->query($sql);
			
			while($row=mysqli_fetch_array($c) )
			{
				?>
					<tr>
					<td><?php echo $row['id'];?></td>
					
					<td><?php echo $row['user_id'];?></td>
					<td><?php echo $row['services'];?></td>
					<td><?php echo $row['date'];?></td>
					<td><?php echo $row['time'];?></td>
					<td><?php echo $row['location'];?></td>
	?>
	<?php
			}
			?>
			 -->
	
	
	
	
	<!-- $sql ="select * from payment where id = '$pid' ";
	$re = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($re))
	{
		$id = $row['id'];
		$title = $row['title'];
		$fname = $row['fname'];
		$lname = $row['lname'];
		$troom = $row['troom'];
		$bed = $row['tbed'];
		$nroom = $row['nroom'];
		$cin = $row['cin'];
		$cout = $row['cout'];
		$meal = $row['meal'];
		$ttot = $row['ttot'];
		$mepr = $row['mepr'];
		$btot = $row['btot'];
		$fintot = $row['fintot'];
		$days = $row['noofdays'];
		
		
		
	
	} -->
	
								
					
	


	
									
	

		<header>
			<h1>Appointment Letter</h1>
			<address >
				<p>MAMLATDAR OFFICE,</p>
				<p>KALAWAD Road,<br>UPLETA,<br>GUJRAT.</p>
				<p9662684475</p>
			</address>
			<span><img alt="" src="assets/img/download.png" height=10%></span>
		</header>
		<article>
			<h1>Appointment </h1>
			<address >
				<h6> <h6>Dear,</h6> <br>
</ADDRESS>
<BR>
<BR>
				<b> <p> &nbsp &nbsp &nbsp &nbsp We are writing to inform you that your appointment with the MAMLATDAR office has been successfully scheduled. we appriciate your cooperation and look forward to assisting you with your application.</p> <br> <br>
				<p> Details of your appointment are as follows: </p> <br> 

		
			
				<h1>  Appointment </h1>

			

<?php
?>


		<div class="charts" >		
			<div class="mid-content-top charts-grids" >
				<div class="middle-content" >
						
					<h1>Appoitntment Data</h1>
					
					<!-- start content_slider -->
					<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
						<div class="panel-body widget-shadow">
						<table class="table table-hover"> 
							 <thead>
                                        <tr>
                                            <!-- <th>Id</th> -->
                                            <th>User Id</th>
                                            <!-- <th>Email</th> -->
											<th>Services</th>
                                            <th>Date</th>
											<th>Time</th>
											<th>Location</th>
											
                                        </tr>
                                    </thead>
                                    
										<?php
			$con=mysqli_connect("localhost","root","","dk");
			$query = "SELECT * FROM appoint WHERE user_id = '$useruid' ORDER BY id DESC LIMIT 1"; // Change 'user_id' to the appropriate column name for the user identifier
			$result = mysqli_query($con, $query);
			$appointmentData = mysqli_fetch_assoc($result);


			
			
			
				?>
					<tr>
					<!-- <td><?php echo $o['id'];?></td> -->
					
					<td><?php echo $appointmentData['user_id'];?></td>
					<td><?php echo $appointmentData['services'];?></td>
					<td><?php echo $appointmentData['date'];?></td>
					<td><?php echo $appointmentData['time'];?></td>
					<td><?php echo $appointmentData['location'];?></td>
					
					
					
					

					</tr>
					
				<?php
			
		?>
		
                                    </tbody>
						</table>
						</div>
					</div>
				</div>
					<!--//sreen-gallery-cursual---->
			</div>
		</div>
		
				
			</div>
		</div>
	



			
		</article>
		<p> &nbsp &nbsp &nbsp &nbsp please make sure to arrive on time for your submitted application. if for any reason you are unable to attend, kindly inform us at least a couple day ago in advance so we can reschedule accordingly.</p> <br>
		<p> &nbsp &nbsp &nbsp &nbsp if you have any questions or need further assistance, please don't hesitate to reach out of us at mamlatdarofficesupport@gmail.com




		<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
		<aside>
			<h1><span >Contact us</span></h1>
			<div >
				<p align="center">Email :- mamlatdarofficesupport@gmail.com || Web :- www.jansevakendrasystemonline.com || Phone :- +91 7203886164 </p>
			</div>
		</aside>
	</body>
</html>

<?php 

ob_end_flush();

?>




 