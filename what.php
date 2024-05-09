
<!DOCTYPE html>
<body>
<table class="table table-hover"> 
						<thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
											<th>D-O-B</th>
											<th>Gender</th>
											<th>Password</th>
                                            <th>Address</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    
										<?php
			$con=mysqli_connect("localhost","root","","admin_db");
			$q="select * from b_register";
			$c=mysqli_query($con,$q);
			
			while($row=mysqli_fetch_array($c))
			{
				?>
					<tr>
					<td><?php echo $row['id'];?></td>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['email'];?></td>
					<td><?php echo $row['dob'];?></td>
					<td><?php echo $row['gender'];?></td>
					<td><?php echo $row['password'];?></td>
					<td><?php echo $row['Address'];?></td>
					<td>
					
					
					</a> &nbsp;&nbsp;&nbsp;
					<a onclick="return confirm('Are you sure you want to delete?');" href="buyerdelete.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash-o fa-fw" style="color:red"></i></a></td>
					</tr>
					
				<?php
			}
		?>
		
                                    </tbody>
                                </table>
							
						</table>
						</body>
						</html>