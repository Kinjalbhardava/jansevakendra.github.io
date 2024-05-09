<?php
			$con=mysqli_connect("localhost","root","","admin_db");
			$q="select * from propertyy";
			$c=mysqli_query($con,$q);
			
			while($row=mysqli_fetch_array($c))
			{
				?>
      <div class="properties">
        <div class="image-holder"><img src="img/<?php echo $row['image1'];?>" height=150 width=150/>
          
        </div>
        <h4><a href="#"><?php echo $row['property_title'];?></a></h4>
        <p class="price">Price:₹<?php echo $row['price'];?></p>
		<p class="price"><span class="glyphicon glyphicon-map-marker"></span><?php echo $row['proper_address'];?></p>
        
        <a class="btn btn-primary" href="property-detail.php?id=<?php echo $row['id'];?>">View Details</a>
		
      </div>
	  <?php
			}
		?>
		<?php
	$id=$_REQUEST['id'];
	
		
			$con=mysqli_connect("localhost","root","","admin_db");
			$q="select * from propertyy where id='$id'";
			$c=mysqli_query($con,$q);
			
			while($row=mysqli_fetch_array($c))
			{
				?>