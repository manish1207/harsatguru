<?php
$pageTitle="HarSATGuru Lab | BLOOD COUNT TEST";
?>

<?php
session_start();
include_once 'inc/dbconnect.php';
include_once 'inc/test_des_db.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index	.php");

}
$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();
?>

<!DOCTYPE html>
<html>
<?php include('inc/head.php'); ?>
<?php include('inc/head1.php'); ?>
<body> 
	
	
<div class="container"> 
	 	<div class=" single_top">
	      <div class="single_grid">
		  <div class="grid images_3_of_2">
		  <div class="banner-matter1">
						<div class="col-md-5 banner-off">
						
			<?php
$sql=" SELECT tests_id, test_name, test_price, test_desc FROM tests WHERE  tests_id='1016'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {

	
    while($row = $result->fetch_assoc()) {
		
$testprice=$row["test_price"];
$testname=$row["test_name"];
$test_desc=$row["test_desc"];
 
 }
} 
$conn->close();	
	?>
	<label><?php echo "<b>".$testname."</b>";?></label>
							</div></div>
					<div class='clearfix'> </div>		
				
				  </div> 
				 <div class="desc1 span_3_of_2">
				  
					
					<h4><b><?php echo $testname ;?></b></h4>
				<div class="cart-b">
					<div class="left-n ">
					<?php
 echo "INR ". $testprice;
?>			</div>	<form method="post">
			    	
				    <a type="button" class="now-get get-cart-in" href="bloodcountbook.php" target="_blank" >ADD TO CART</a> 
				   
</form>
				    <div class="clearfix"></div>
				
				</div>
				 
				 <label>This Package will contain following tests</label>
				 <p> <?php echo $test_desc;?></p>
				</div>
	<h3 class="clearfix"></h3>
				     				     	<p class="clearfix">This is a <b>Advance</b> health check-up.It include the tests related to kidney, liver, heart, thyroid, diabetes, blood,urine</p>
				<div class="clearfix"> </div>
          	   </div>
			
	
          	    	<div class="toogle">
				     </div>	
          	   </div>
          	   
          	   <!---->
<?php include('inc/sub-cat.php');?>
	   		    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->
	<?php include('inc/footer.php');?>
</body>
</html>


