<?php
if(!isset($_GET['t'])){
   header('location: index.html'); 
}
else{
    $code = $_GET['t'];
}

include 'connection.php';
$stmt1 = $con->prepare('SELECT `id`, `ticket_code`, `name`, `email`, `facebook_link`, `contact`, `drink`, `flavor`, `status` FROM `tbl_participants` WHERE ticket_code=?');
$stmt1->bind_param('s',$code);
$stmt1->execute();
$stmt1->store_result();
$stmt1->bind_result($id,$ticket_code,$name,$email,$facebook,$contact,$drink,$flavor,$status);
$stmt1->fetch();
if($stmt1->num_rows==0){
    header('location: index.html'); 
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>The black Friday | Tickets</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
		<!-- FAVICON LINK -->
	<link rel="shortcut icon" href="../images/logo-w.png" type="image/x-icon">
	
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<img src="../images/logo-w.png" width="100%" />
					<h2 class="heading-section">Ticket Status</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row justify-content-center">
							<div class="col-lg-8">
								<div class="contact-wrap">
									<h3 class="mb-4 text-center"><?php echo $status ?></h3>
				      		       <center> 
				      		       <?php
				      		       if($status =='CONFIRMED'){
				      		           ?>
				      		           <img src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=http://eironpogi.site/theblackfriday/tickets/tickets.php?<?php echo $code ?>"
				      		           <?php
				      		       }else if($status == 'WAITING FOR PAYMENT'){
				      		           ?>
				      		           <p> (PAYMENT INSTRUCTIONS HERE)</p>
    				      		       <p> (PAYMENT INSTRUCTIONS HERE)</p>
    				      		       <p> (PAYMENT INSTRUCTIONS HERE)</p>
    				      		       <p> (PAYMENT INSTRUCTIONS HERE)</p>
    				      		       <p> (PAYMENT INSTRUCTIONS HERE)</p>
    				      		       <p> (PAYMENT INSTRUCTIONS HERE)</p>
    				      		       <p> (PAYMENT INSTRUCTIONS HERE)</p>
    				      		       <p> (PAYMENT INSTRUCTIONS HERE)</p>
    				      		       <p> (PAYMENT INSTRUCTIONS HERE)</p>
    				      		       	<h3 class="mb-4 text-center">Submit Proof of Payment</h3>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm" action="action.php">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" required class="form-control" name="t_code" id="name" placeholder="Transaction Code">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" required class="form-control" name="account_number" id="name" placeholder="Account Number (Last 4 digits)">
												</div>
											</div>
										    <input type="hidden" value="<?php echo $code ?>" name="code" />
											<div class="col-md-12">
												<div class="form-group">
													<select name="origin" required class="form-control" id="drink" style="background:#141414">
													    <option disabled selected>Select Origin</option>
													    <option>GCash</option>
													    <option>GrabPay</option>
													    <option>PayMaya</option>
													    <option>BPI</option>
													    <option>BDO</option>
													    <option>PNB</option>
													    <option>UnionBank</option>
													    <option>ChinaBank</option>
													    <option>EastWest Bank</option>
													    <option>LandBank Bank</option>
													    <option>Metro Bank</option>
													    <option>Others</option>
													</select>
												</div>
											</div>
											
											<div class="col-md-12">
											    <hr style="color:white">
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name="pop" value="Submit" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
				      		           <?php
				      		       }
				      		       ?>
				      		       </center>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

