<div class="login-box">
	<div class="login-logo">
		<a href="<?php echo base_url(); ?>"><b><?php echo $site['nama_website'] ?></b></a>
	</div>
	<!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg text-bold"> Masuk Dengan Username & Password Anda</p>
		<form method="post" action="<?php echo base_url('auth/login'); ?>" role="login">
			<div class="form-group has-feedback">
				<input type="text" name="username" class="form-control" placeholder="Username" />
				<span class="glyphicon  glyphicon-envelope form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input type="password" name="password" class="form-control" required minlength="5" placeholder="Password" />
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8" style="padding-bottom: 7px; margin-left:100px;">
					<button type="submit" name="submit" value="login" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in" aria-hidden="true"></i> Masuk</button>
				</div>
			</div>

		</form>
	</div>
	<div id="myalert">
		<?php echo $this->session->flashdata('alert', true) ?>
	</div>
	<br>

	<script>
		$(function() {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
				increaseArea: '20%' // optional
			});
		});
		$('#myalert').delay('slow').slideDown('slow').delay(4100).slideUp(600);
	</script>