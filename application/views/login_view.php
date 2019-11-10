<div class="container">
	<div class="row">
		<div class="col-md 4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Please Sign In</h3>
				</div>
				<div class="panel-body">
					
					<?php
						if(!empty($notif)){
							echo '<div class="alert alert-danger">';
							echo $notif;
							echo '</div>';
						}
					?>

					<form role="form" action="<?php echo base_url(); ?>index.php/login/dologin" method="post">
						<fieldset>
							<div class="form-groub">
								<input class="form-control" placeholder="username" name="username" autofocus>
							</div>
							<div class="form-groub">
								<input class="form-control" placeholder="password" name="password" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input nama="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<input class="btn btn-lg btn-success tbn-block" name="submit" type="submit" value="login">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>