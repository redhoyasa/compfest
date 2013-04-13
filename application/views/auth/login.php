    <div class="container">
		<div class="row">
            <div class="page-header" style="text-align: center;">
                <h1>Login</h1>
            </div>
        </div>
        <br>
        <div class="well" style="margin: auto; width: 40%; text-align: center;">
			<?php if(validation_errors()) { ?>
				<div class="alert alert-error">
					<?php echo validation_errors(); ?>
				</div>
			<?php } ?>
            <form class="inside" action="<?php echo site_url('auth/login');?>" method="post">
                <h2>Email</h2><br>
                <input type="text" name="email" /><br><br>
				<h2>Password</h2><br>
				<input type="password" name="password" /><br><br>
                <input type="submit" class="btn btn-primary" value="login" />
            </form>
        </div>
    </div><!-- /container -->
    
