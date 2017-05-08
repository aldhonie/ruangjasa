<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><body>

	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<ul class="menu">
					<li class="active"><a href="index.html">Style 1</a></li>
					<li><a href="index2.html">Style 2</a></li>
					<li><a href="index3.html">Style 3</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<!-- Start Sign In Form -->
				<form action="#" class="fh5co-form animate-box" data-animate-effect="fadeIn">
					<h2>Sign In</h2>
					<div class="form-group">
						<label for="username" class="sr-only">Username</label>
						<input type="text" class="form-control" id="username" placeholder="Username" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
					</div>
					<div class="form-group">
						<label for="remember"><input type="checkbox" id="remember"> Remember Me</label>
					</div>
					<div class="form-group">
						<p>Not registered? <a href="sign-up.html">Sign Up</a> | <a href="forgot.html">Forgot Password?</a></p>
					</div>
					<div class="form-group">
						<input type="submit" value="Sign In" class="btn btn-primary">
					</div>
				</form>
				<!-- END Sign In Form -->

			</div>
		</div>
	</div>
</body><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>