<!-- BEGIN HEADER-->
<header id="header" >
	<div class="headerbar">
		<!-- header aja -->
		<div class="headerbar-left">
			<ul class="header-nav header-nav-options">
				<li class="header-nav-brand" >
					<div class="brand-holder">
						<a href="<?php echo base_url(); ?>login">
							<span class="text-lg text-bold text-primary">INFORMATION SYSTEM</span> <i class="fa fa-gears"></i>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</header>
<!-- END HEADER-->

<!-- BEGIN CONTENT -->
<div id="content">
	<section>
		<div class="section-body contain-sm">
			<div class="col-sm-3"></div>
			<div class="card card-underline col-sm-6">
				<div class="card-head  tabs-primary-dark">
					<ul class="nav nav-tabs tabs-center" data-toggle="tabs">
						<li class="active"><a href="#login">LOGIN</a></li>
						<li><a href="#signup">sign up</a></li>
						<li><a href="#help"><i class="md md-help"></i></a></li>
					</ul>
				</div>
				<div class="card-body tab-content">
					<!-- login form -->
					<div class="tab-pane active" id="login">
						<form method="POST" action="Login/getlogin" class="form col-md-12 floating-label" role="form">
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
									<div class="input-group-content">
										<input type="text" class="form-control" id="username" name="username" required>
										<label for="username">username</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>
									<div class="input-group-content">
										<input type="password" class="form-control" id="password" name="password" required>
										<label for="password">password</label>
										<p class="help-block"><a href="#">Forgotten?</a></p>
									</div>
								</div>
							</div>
							<div class="form-group" align="right">
								<button type="submit" class="btn ink-reaction btn-raised btn-primary">login <i class="fa fa-send fa-fw"></i></button>
							</div>
						</form>
					</div>
					<!-- Signup form -->
					<div class="tab-pane" id="signup">
						<form action="#" class="form col-md-12 floating-label" role="form">
							<div class="form-group">
								<div class="input-group col-sm-12">
									<div class="input-group-content">
											<input type="text" class="form-control" id="amount3">
											<label for="amount3">Full Name</label>

									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group col-sm-12">
									<div class="input-group-content">
										<input type="text" class="form-control" id="amount2" required="">
										<label for="amount2">User Name</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group col-sm-12">
									<div class="input-group-content">
										<input type="password" class="form-control" id="amount3" required="">
										<label for="amount2">Password</label>
									</div>
								</div>
							</div>
							<div class="form-group">
								<select id="select" name="select" class="form-control" required>
									<option value="">&nbsp;</option>
									<option value="40">Pegawai</option>
									<option value="50">Pelajar</option>
									<option value="30">Pengajar</option>
								</select>
								<label for="select">Status</label>
							</div>
							<div class="form-group" align="right">
								<button type="button" class="btn ink-reaction btn-raised btn-primary">Register <i class="fa fa-user fa-fw"></i></button>
							</div>
						</form>
					</div>
					<!-- Help and Support -->
					<div class="tab-pane" id="help">This is help area, where you will found the instruction about login or sign up. This feature will available when the login and sign in page are available.</div>
				</div>
			</div>
		</div>
	</section>
</div>