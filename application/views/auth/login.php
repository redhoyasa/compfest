<br>
<div class="container">
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
                <h4>Email</h4>
                <input type="text" name="email" />
				<h4>Password</h4>
				<input type="password" name="password" /><br><br>
                <input type="submit" class="btn btn-danger" value="LOGIN" />
            </form>
        </div>
    </div><!-- /container >
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/login.css"-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">  
