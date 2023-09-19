<?php 
$this->load->view('client/template/page_banner.php'); ?>

<div
	class="container pt-70 pb-40"
	style="padding-left: 10%; padding-right: 10%"
>
	<h3>Ganti Password</h3>
	<form action="" method="post" role="form" style="display: block">
		<div class="mt-10">
			<input
				type="password"
				name="gantipassword"
				placeholder="Password"
				onfocus="this.placeholder = ''"
				onblur="this.placeholder = 'Password'"
				required
				class="single-input"
			/>
		</div>
		<br />
		<div class="form-group">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<input
						type="submit"
						name="login-submit"
						id=""
						tabindex="4"
						class="form-control btn btn-info"
						value="Submit"
					/>
				</div>
			</div>
		</div>
	</form>
</div>
