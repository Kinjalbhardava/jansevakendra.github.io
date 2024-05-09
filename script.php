<?php
 session_start();
 $con=mysqli_connect("localhost","root","","userdb");
 			$_SESSION['uid']=$row['id'];
			
			if($loc=1)