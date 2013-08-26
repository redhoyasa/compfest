<div class="container">
    <div style="height:80px;">&nbsp;</div>
    <div class="login-container">
		<div class="row">
            <div class="page-header" style="text-align: center;">
                <h3>LOGIN</h3>
            </div>
        </div><br>
        <div class="well" style=" ">
			<?php if(validation_errors()) { ?>
				<div class="alert-error">
					<?php echo validation_errors(); ?>
				</div>
			<?php } ?>
            <form action="<?php echo site_url('auth/login');?>" method="post">
		<div class="control-group">
			<label class="control-label" for="inputInstitution">Email</label>
			<div class="controls">
			 <input class="wow" type="text" name="email" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputInstitution">Password</label>
			<div class="controls">
			 <input class="wow" type="password" name="password" />
			</div>
		</div>
                <input type="submit" class="btn btn-small" value="LOGIN" />
             </form>
        </div>
    </div>
</div><!-- /container --> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/login.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css"> 
<style>#content {
	background:transparent!important;
	border : 0!important;
}</style>