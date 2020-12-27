<?php

include_once('navigation.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Message</title>
</head>
<style type="text/css">
	.list{
		overflow-y: scroll;
		overflow-x: hidden;
		height: 75vh;
		border-radius: 3px;
	}

</style>
<body>
	<?php
	$sql1=mysqli_query($db, "SELECT customer.pic,message.username FROM register INNER JOIN message ON customer.username=message.username group by username ORDER BY status ;");
	?>
<div class="container-fluid">
	<div class="row mb-5" style="margin-top: 80px;">
		<!-- left side -->
		<div class="col-md-3 ml-auto bg-light mr-3 mb-2" style="height: 80vh;border-radius: 5px;">
			<div class="list mt-3 bg-success">
				<h2 class="text-default text-center mt-2">Chats</h2>
				<div class="table-responsive">
					<div class="table no-margin">
						<tbody>
							<tr>
								<td>
									<?php
									while ($result1=mysqli_fetch_assoc($sql1)) {
									
										echo "<div>
                                  <img class='img-circle profile-img' height=30 width= 20 src='images/240.png".$result1['pic']."'>
                              </div>";
                         				 }
                         				 echo $result1['username'];
									?>
								</td>
							</tr>
						</tbody>
					</div>
				</div>
			</div>
		</div>
		<!--end of left side -->
		<!-- right hand -->
		<div class="col-md-6 bg-light mr-3" style="height: 80vh;border-radius: 5px;">
			
		</div>
		<!-- end of right hand -->
	</div>
</div>
</body>
</html>
