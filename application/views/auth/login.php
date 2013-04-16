
<div class="container">
    <div class="space">&nbsp;</div>
    <div class="login-container">
		<div class="row">
            <div class="page-header" style="text-align: center;">
                <h3>Login</h3>
            </div>
        </div>
        <div class="well" style="margin: auto; width: 40%; text-align: center;">
			<?php if(validation_errors()) { ?>
				<div class="alert alert-error">
					<?php echo validation_errors(); ?>
				</div>
			<?php } ?>
            <form action="<?php echo site_url('auth/login');?>" method="post">
                Email
                <input class="wow" type="text" name="email" />
				Password
				<input class="wow" type="password" name="password" /><br><br>
                <input type="submit" class="btn btn-small" value="LOGIN" />
            </form>
        </div>
    </div>
</div><!-- /container --> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/login.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css"> 