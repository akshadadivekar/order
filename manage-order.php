<?php include("menu.php")  
 ?>
       <div class="main-content">
     <div class="wrapper">
        <h1>Manage Order</h1>
			<br/> <br/>
		
		 <!--  button to Add admin -->
		 

		<table class="tbl-full">
	<tr>
		    <th>S.N.</th>
			        <th>Items</th>
			            <th>Price</th>
			                <th>Qty</th>
			                    <th>Total</th>
			                        <th>Order Date</th>
			                            <th>Status</th>
			                                 <th>Customer Name</th>
			                                    <th>Contact</th>
				                                    <th>Email</th>
				                                        <th>Address</th>
				                                             <th>Action</th>
				
	</tr>
	
	    <?php 
		
		        $sql = "SELECT * FROM tbl_order";
				
				$res = mysqli_query($conn, $sql);
				
				$count = mysqli_num_rows($res);
			
			    $sn = 1;
			
			      if($count>0)
				  {
					while($rows = mysqli_fetch_assoc($res))
					{
					
                        $id=$rows['id'];
						$items=$rows['items'];
					    $price=$rows['price'];
                        $total=$rows['total'];
					    $order_date=$rows['order_date'];
						$status=$rows['status'];
						$customer_name=$rows['customer_name'];
					    $customer_contact=$rows['customer_contact'];
                        $customer_email=$rows['customer_email'];
					    $customer_address=$rows['customer_address'];
						
						?>
						 <tr>
		                    <td><?php echo $sn++; ?></td>
		                    <td><?php echo $items; ?></td>
		                    <td><?php echo $price; ?></td>
		                    <td><?php echo $qty; ?></td>
		                    <td><?php echo $total; ?></td>
		                    <td><?php echo $order_date; ?></td>
		                    <td><?php echo $status; ?></td>
		                    <td><?php echo $customer_name; ?></td>
		                    <td><?php echo $customer_cantact; ?></td>
		                    <td><?php echo $customer_email; ?></td>
		                    <td><?php echo $customer_address; ?></td>
		                   
		
		                     <td>
			                 <a href="#" class="btn-secondary">Update Order</a>
                             <a href="#" class="btn-danger">Delete Order</a>
		                     </td>
	                     </tr>
	
	
						
						<?php
						
                    }						
				  }
				  else
				  {
					
					echo "<tr> <td colspan='12' class='error'>Order Not available. </td> </tr>";  
					  
				  }
		?>
	
	
</table>
			
			<div class="clearfix"></div>
     	</div>
     </div>
 
 <?php include("footer.php")  
    ?>
        