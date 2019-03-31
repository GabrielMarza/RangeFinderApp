<!DOCTYPE html>
<html>
<head>
	<title>Complete User Registration and Login System in Codeigniter</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
	<div class="container">
		<h3 align+"center">Complete User Registration and Login System in Codeigniter</h3>
		<div class="panel panel-default">
			<div class="panel-heading">Register</div>
			<div class="panel-body">
				<form class="" action="<?php echo base_url(); ?>register_validation" method="post">
					<label>Enter your name</label>
					<input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>" />
					<span class="text-danger"><?php echo form_error('username'); ?></span>
				</form>
			</div>
			<div class="form-group">
				<label>Enter your valid email address</label>
				<input type="text" name="email" class="form-control" value="<?php echo set_value('email'); ?>" />
				<span class="text-danger"><?php echo form_error('email'); ?></span>
			</div>
			<div class="form-group">
				<label>Enter your password</label>
				<input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" />
				<span class="text-danger"><?php echo form_error('password'); ?></span>
			</div>
			<div class="form-group">
				<input type="submit" name="register" class="btn btn-info" value="Register" />
			</div>
		</div>
	</div>
</body>
</html>
