<?php $this->view('header',$data) ?>

	<section id="form" style="margin-top: 5px"><!--form-->
		<div class="container">
			<div class="row" style="text-align: center">
                <span style="font-size: 22px;color: #f00;"><?php check_error(); ?></span>
				<div class="col-sm-4 col-sm-offset-1" style="float:none; display: inline-block">
					<div class="login-form" ><!--login form-->
						<h2>Login to your account</h2>
						<form action="#" method="post">
                            <input type="email" value='<?= $_POST['email'] ?? '' ?>' name ='email' placeholder="Email Address" />
                            <input type="password" value='<?= $_POST['$password'] ?? '' ?>' name ='password' placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
                            <br>
                            <a href="<?= ROOT ?>signup">Don't have an account? Signup Here</a>
						</form>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

    <?php $this->view('footer') ?>