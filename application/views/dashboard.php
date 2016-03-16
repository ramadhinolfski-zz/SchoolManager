<!-- BEGIN CONTENT-->
<div id="content">
	<section>
		<div class="section-body">
			<div class="row">

				<!-- BEGIN ALERT - PENDAFTAR -->
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<div class="card-body no-padding">
							<div class="alert alert-callout alert-info no-margin">
								<strong class="pull-right text-success text-lg">0,38% <i class="md md-trending-up"></i></strong>
								<strong class="text-xl">$ 32,829</strong><br/>
								<span class="opacity-50">Revenue</span>
								<div class="stick-bottom-left-right">
									<div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
								</div>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END ALERT - PENDAFTAR -->

				<!-- BEGIN ALERT - MAHASISWA -->
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<div class="card-body no-padding">
							<div class="alert alert-callout alert-warning no-margin">
								<strong class="pull-right text-warning text-lg">0,01% <i class="md md-swap-vert"></i></strong>
								<strong class="text-xl">432,901</strong><br/>
								<span class="opacity-50">Visits</span>
								<div class="stick-bottom-right">
									<div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
								</div>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END ALERT - MAHASISWA -->

				<!-- BEGIN ALERT - KETERSERAPAN -->
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<div class="card-body no-padding">
							<div class="alert alert-callout alert-danger no-margin">
								<strong class="pull-right text-danger text-lg">0,18% <i class="md md-trending-down"></i></strong>
								<strong class="text-xl">29.6%</strong><br/>
								<span class="ncopacity-50">Bounce rate</span>
								<div class="stick-bottom-left-right">
									<div class="progress progress-hairline no-margin">
										<div class="progress-bar progress-bar-danger" style="width:30%"></div>
									</div>
								</div>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END ALERT - KETERSERAPAN -->

				<!-- BEGIN ALERT - DOSEN -->
				<div class="col-md-3 col-sm-6">
					<div class="card">
						<div class="card-body no-padding">
							<div class="alert alert-callout alert-success no-margin">
								<h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
								<strong class="text-xl">54 sec.</strong><br/>
								<span class="opacity-50">Avg. time on site</span>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END ALERT - DOSEN -->

			</div><!--end .row -->
			<div class="row">

				<!-- BEGIN SITE ACTIVITY -->
				<div class="col-md-9">
					<div class="card ">
						<div class="row">
							<div class="col-md-8">
								<div class="card-head">
									<header>Site activity</header>
								</div><!--end .card-head -->
								<div class="card-body height-8">
									<div id="flot-visitors-legend" class="flot-legend-horizontal stick-top-right no-y-padding"></div>
									<div id="flot-visitors" class="flot height-7" data-title="Activity entry" data-color="#7dd8d2,#0aa89e"></div>
								</div><!--end .card-body -->
							</div><!--end .col -->
							<div class="col-md-4">
								<div class="card-head">
									<header>Today's stats</header>
								</div>
								<div class="card-body height-8">
									<strong>214</strong> members
									<span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
									<div class="progress progress-hairline">
										<div class="progress-bar progress-bar-primary-dark" style="width:43%"></div>
									</div>
									756 pageviews
									<span class="pull-right text-success text-sm">0,68% <i class="md md-trending-up"></i></span>
									<div class="progress progress-hairline">
										<div class="progress-bar progress-bar-primary-dark" style="width:11%"></div>
									</div>
									291 bounce rates
									<span class="pull-right text-danger text-sm">21,08% <i class="md md-trending-down"></i></span>
									<div class="progress progress-hairline">
										<div class="progress-bar progress-bar-danger" style="width:93%"></div>
									</div>
									32,301 visits
									<span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
									<div class="progress progress-hairline">
										<div class="progress-bar progress-bar-primary-dark" style="width:63%"></div>
									</div>
									132 pages
									<span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
									<div class="progress progress-hairline">
										<div class="progress-bar progress-bar-primary-dark" style="width:47%"></div>
									</div>
								</div><!--end .card-body -->
							</div><!--end .col -->
						</div><!--end .row -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END SITE ACTIVITY -->

				<!-- BEGIN SERVER STATUS -->
				<div class="col-md-3">
					<div class="card">
						<div class="card-head">
							<header class="text-primary">Server status</header>
						</div><!--end .card-head -->
						<div class="card-body height-4">
							<div class="pull-right text-center">
								<em class="text-primary">Temperature</em>
								<br/>
								<div id="serverStatusKnob" class="knob knob-shadow knob-primary knob-body-track size-2">
									<input type="text" class="dial" data-min="0" data-max="100" data-thickness=".09" value="50" data-readOnly=true>
								</div>
							</div>
						</div><!--end .card-body -->
						<div class="card-body height-4 no-padding">
							<div class="stick-bottom-left-right">
								<div id="rickshawGraph" class="height-4" data-color1="#0aa89e" data-color2="rgba(79, 89, 89, 0.2)"></div>
							</div>
						</div><!--end .card-body -->
					</div><!--end .card -->
				</div><!--end .col -->
				<!-- END SERVER STATUS -->
				
			</div><!--end .row -->
		</div><!--end .section-body -->
	</section>
</div><!--end #content-->
<!-- END CONTENT -->