<?php include ROOT.'/Views/header.php'; ?>

		<div class="about">
			<div class="prody">
				<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="index.php">Home</a>&nbsp;<span>&gt;</span></li>
						<li><a href="#">Account</a>&nbsp;<span>&gt;</span></li>
						<li><span class="act"><a href="register.php">Register</a></span>&nbsp;</li>
					</ul>
					<p class="back"><a href="index.php">Back to Previous</a></p>
					<div class="clearfix"></div>
				</div>
				 <h3 class="new-models">For New Customers</h3>
				 <div class="register">

				  	<form action="#" method="post"> 

							<h3>REGISTRATION</h3>

							<div class="errors">
								<?php 
									if(!empty($errors))
									{
										echo $errors[0]; 										
									} 
								?>
							</div>

							<div>
								<span>Name<label>*</label></span>
								<input type="text" name="name" placeholder="name" required> 
							</div>
							<div>
								<span>Email (Login)<label>*</label></span>
								<input type="email" name="email" placeholder="email" required> 
							</div>
							<div class="clearfix"> </div>
							   	<!-- <a class="news-letter" href="#">
								 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
							   	</a> -->


									 <div>
										<span>Password<label>*</label></span>
										<input type="password" name="password" placeholder="password" required> 
									 </div>
<!-- 									 <div>
										<span>Confirm Password<label>*</label></span>
										<input type="password">
									 </div> -->
		
						<div class="register-but">
							<input type="submit" name="submit" value="submit">
						</div>

					</form>

						<div class="clearfix"> </div>
				   </div>
			</div>
			<div class="clearfix"></div>

<?php include ROOT.'/Views/footer.php'; ?>