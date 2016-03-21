	<body class="menubar-hoverable header-fixed ">

		<!-- BEGIN HEADER-->
		<header id="header" >
			<div class="headerbar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="headerbar-left">
					<ul class="header-nav header-nav-options">
						<li class="header-nav-brand" >
							<div class="brand-holder">
								<a href="<?php echo base_url(); ?>html/dashboards/dashboard.html">
									<span class="text-lg text-bold text-primary">MATERIAL ADMIN</span>
								</a>
							</div>
						</li>
						<li>
							<a class="btn btn-icon-toggle menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
								<i class="fa fa-bars"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="headerbar-right">
					<ul class="header-nav header-nav-options">
						<li>
							<!-- Search form -->
							<form class="navbar-search" role="search">
								<div class="form-group">
									<input type="text" class="form-control" name="headerSearch" placeholder="Enter your keyword">
								</div>
								<button type="submit" class="btn btn-icon-toggle ink-reaction"><i class="fa fa-search"></i></button>
							</form>
						</li>
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-bell"></i><sup class="badge style-danger">4</sup>
							</a>
							<ul class="dropdown-menu animation-expand">
								<li class="dropdown-header">Today's messages</li>
								<li>
									<a class="alert alert-callout alert-warning" href="javascript:void(0);">
										<img class="pull-right img-circle dropdown-avatar" src="<?php echo base_url(); ?>assets/img/avatar2.jpg?1404026449" alt="" />
										<strong>Alex Anistor</strong><br/>
										<small>Testing functionality...</small>
									</a>
								</li>
								<li>
									<a class="alert alert-callout alert-info" href="javascript:void(0);">
										<img class="pull-right img-circle dropdown-avatar" src="<?php echo base_url(); ?>assets/img/avatar3.jpg?1404026799" alt="" />
										<strong>Alicia Adell</strong><br/>
										<small>Reviewing last changes...</small>
									</a>
								</li>
								<li class="dropdown-header">Options</li>
								<li><a href="<?php echo base_url(); ?>html/pages/login.html">View all messages <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/login.html">Mark as read <span class="pull-right"><i class="fa fa-arrow-right"></i></span></a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0);" class="btn btn-icon-toggle btn-default" data-toggle="dropdown">
								<i class="fa fa-area-chart"></i>
							</a>
							<ul class="dropdown-menu animation-expand">
								<li class="dropdown-header">Server load</li>
								<li class="dropdown-progress">
									<a href="javascript:void(0);">
										<div class="dropdown-label">
											<span class="text-light">Server load <strong>Today</strong></span>
											<strong class="pull-right">93%</strong>
										</div>
										<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 93%"></div></div>
									</a>
								</li><!--end .dropdown-progress -->
								<li class="dropdown-progress">
									<a href="javascript:void(0);">
										<div class="dropdown-label">
											<span class="text-light">Server load <strong>Yesterday</strong></span>
											<strong class="pull-right">30%</strong>
										</div>
										<div class="progress"><div class="progress-bar progress-bar-success" style="width: 30%"></div></div>
									</a>
								</li><!--end .dropdown-progress -->
								<li class="dropdown-progress">
									<a href="javascript:void(0);">
										<div class="dropdown-label">
											<span class="text-light">Server load <strong>Lastweek</strong></span>
											<strong class="pull-right">74%</strong>
										</div>
										<div class="progress"><div class="progress-bar progress-bar-warning" style="width: 74%"></div></div>
									</a>
								</li><!--end .dropdown-progress -->
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-options -->
					<ul class="header-nav header-nav-profile">
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle ink-reaction" data-toggle="dropdown">
								<img src="<?php echo base_url(); ?>assets/img/avatar1.jpg?1403934956" alt="" />
								<span class="profile-info">
									Daniel Johnson
									<small>Administrator</small>
								</span>
							</a>
							<ul class="dropdown-menu animation-dock">
								<li class="dropdown-header">Config</li>
								<li><a href="<?php echo base_url(); ?>html/pages/profile.html">My profile</a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/blog/post.html">My blog <span class="badge style-danger pull-right">16</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/calendar.html">My appointments</a></li>
								<li class="divider"></li>
								<li><a href="<?php echo base_url(); ?>html/pages/locked.html"><i class="fa fa-fw fa-lock"></i> Lock</a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/login.html"><i class="fa fa-fw fa-power-off text-danger"></i> Logout</a></li>
							</ul><!--end .dropdown-menu -->
						</li><!--end .dropdown -->
					</ul><!--end .header-nav-profile -->
					<ul class="header-nav header-nav-toggle">
						<li>
							<a class="btn btn-icon-toggle btn-default" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="fa fa-ellipsis-v"></i>
							</a>
						</li>
					</ul><!--end .header-nav-toggle -->
				</div><!--end #header-navbar-collapse -->
			</div>
		</header>
		<!-- END HEADER-->

		<!-- BEGIN BASE-->
		<div id="base">

			<!-- BEGIN OFFCANVAS LEFT -->
			<div class="offcanvas">
			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS LEFT -->

			<!-- BEGIN CONTENT-->
			<div id="content">
				<section class="style-default-bright">
					<div class="section-header">
						<h2 class="text-primary">DataTables</h2>
					</div>
					<div class="section-body">

						<!-- BEGIN DATATABLE 1 -->
						<div class="row">
							<div class="col-md-8">
								<article class="margin-bottom-xxl">
									<p class="lead">
										DataTables is a plug-in for the jQuery Javascript library.
										It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.
									</p>
								</article>
							</div><!--end .col -->
						</div><!--end .row -->
						<div class="row">
							<div class="col-md-12">
								<h4>Example 1: Show/hide columns</h4>
							</div><!--end .col -->
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable1" class="table table-striped table-hover">
										<thead>
											<tr>
												<th>Rendering engine</th>
												<th>Browser</th>
												<th>Platform(s)</th>
												<th class="sort-numeric">Engine version</th>
												<th class="sort-alpha">CSS grade</th>
											</tr>
										</thead>
										<tbody>
											<tr class="gradeX">
												<td>Trident</td>
												<td>Internet Explorer 4.0</td>
												<td>Win 95+</td>
												<td>4</td>
												<td>X</td>
											</tr>
											<tr class="gradeC">
												<td>Trident</td>
												<td>Internet Explorer 5.0</td>
												<td>Win 95+</td>
												<td>5</td>
												<td>C</td>
											</tr>
											<tr class="gradeA">
												<td>Trident</td>
												<td>Internet Explorer 5.5</td>
												<td>Win 95+</td>
												<td>5.5</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Trident</td>
												<td>Internet Explorer 6</td>
												<td>Win 98+</td>
												<td>6</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Trident</td>
												<td>Internet Explorer 7</td>
												<td>Win XP SP2+</td>
												<td>7</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Trident</td>
												<td>AOL browser (AOL desktop)</td>
												<td>Win XP</td>
												<td>6</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Firefox 1.0</td>
												<td>Win 98+ / OSX.2+</td>
												<td>1.7</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Firefox 1.5</td>
												<td>Win 98+ / OSX.2+</td>
												<td>1.8</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Firefox 2.0</td>
												<td>Win 98+ / OSX.2+</td>
												<td>1.8</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Firefox 3.0</td>
												<td>Win 2k+ / OSX.3+</td>
												<td>1.9</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Camino 1.0</td>
												<td>OSX.2+</td>
												<td>1.8</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Camino 1.5</td>
												<td>OSX.3+</td>
												<td>1.8</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Netscape 7.2</td>
												<td>Win 95+ / Mac OS 8.6-9.2</td>
												<td>1.7</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Netscape Browser 8</td>
												<td>Win 98SE+</td>
												<td>1.7</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Netscape Navigator 9</td>
												<td>Win 98+ / OSX.2+</td>
												<td>1.8</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.0</td>
												<td>Win 95+ / OSX.1+</td>
												<td>1</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.1</td>
												<td>Win 95+ / OSX.1+</td>
												<td>1.1</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.2</td>
												<td>Win 95+ / OSX.1+</td>
												<td>1.2</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.3</td>
												<td>Win 95+ / OSX.1+</td>
												<td>1.3</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.4</td>
												<td>Win 95+ / OSX.1+</td>
												<td>1.4</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.5</td>
												<td>Win 95+ / OSX.1+</td>
												<td>1.5</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.6</td>
												<td>Win 95+ / OSX.1+</td>
												<td>1.6</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.7</td>
												<td>Win 98+ / OSX.1+</td>
												<td>1.7</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Mozilla 1.8</td>
												<td>Win 98+ / OSX.1+</td>
												<td>1.8</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Seamonkey 1.1</td>
												<td>Win 98+ / OSX.2+</td>
												<td>1.8</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Gecko</td>
												<td>Epiphany 2.20</td>
												<td>Gnome</td>
												<td>1.8</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>Safari 1.2</td>
												<td>OSX.3</td>
												<td>125.5</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>Safari 1.3</td>
												<td>OSX.3</td>
												<td>312.8</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>Safari 2.0</td>
												<td>OSX.4+</td>
												<td>419.3</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>Safari 3.0</td>
												<td>OSX.4+</td>
												<td>522.1</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>OmniWeb 5.5</td>
												<td>OSX.4+</td>
												<td>420</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>iPod Touch / iPhone</td>
												<td>iPod</td>
												<td>420.1</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Webkit</td>
												<td>S60</td>
												<td>S60</td>
												<td>413</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 7.0</td>
												<td>Win 95+ / OSX.1+</td>
												<td>-</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 7.5</td>
												<td>Win 95+ / OSX.2+</td>
												<td>-</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 8.0</td>
												<td>Win 95+ / OSX.2+</td>
												<td>-</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 8.5</td>
												<td>Win 95+ / OSX.2+</td>
												<td>-</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 9.0</td>
												<td>Win 95+ / OSX.3+</td>
												<td>-</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 9.2</td>
												<td>Win 88+ / OSX.3+</td>
												<td>-</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera 9.5</td>
												<td>Win 88+ / OSX.3+</td>
												<td>-</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Opera for Wii</td>
												<td>Wii</td>
												<td>-</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Nokia N800</td>
												<td>N800</td>
												<td>-</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>Presto</td>
												<td>Nintendo DS browser</td>
												<td>Nintendo DS</td>
												<td>8.5</td>
												<td>C/A<sup>1</sup></td>
											</tr>
											<tr class="gradeC">
												<td>KHTML</td>
												<td>Konqureror 3.1</td>
												<td>KDE 3.1</td>
												<td>3.1</td>
												<td>C</td>
											</tr>
											<tr class="gradeA">
												<td>KHTML</td>
												<td>Konqureror 3.3</td>
												<td>KDE 3.3</td>
												<td>3.3</td>
												<td>A</td>
											</tr>
											<tr class="gradeA">
												<td>KHTML</td>
												<td>Konqureror 3.5</td>
												<td>KDE 3.5</td>
												<td>3.5</td>
												<td>A</td>
											</tr>
											<tr class="gradeX">
												<td>Tasman</td>
												<td>Internet Explorer 4.5</td>
												<td>Mac OS 8-9</td>
												<td>-</td>
												<td>X</td>
											</tr>
											<tr class="gradeC">
												<td>Tasman</td>
												<td>Internet Explorer 5.1</td>
												<td>Mac OS 7.6-9</td>
												<td>1</td>
												<td>C</td>
											</tr>
											<tr class="gradeC">
												<td>Tasman</td>
												<td>Internet Explorer 5.2</td>
												<td>Mac OS 8-X</td>
												<td>1</td>
												<td>C</td>
											</tr>
											<tr class="gradeA">
												<td>Misc</td>
												<td>NetFront 3.1</td>
												<td>Embedded devices</td>
												<td>-</td>
												<td>C</td>
											</tr>
											<tr class="gradeA">
												<td>Misc</td>
												<td>NetFront 3.4</td>
												<td>Embedded devices</td>
												<td>-</td>
												<td>A</td>
											</tr>
											<tr class="gradeX">
												<td>Misc</td>
												<td>Dillo 0.8</td>
												<td>Embedded devices</td>
												<td>-</td>
												<td>X</td>
											</tr>
											<tr class="gradeX">
												<td>Misc</td>
												<td>Links</td>
												<td>Text only</td>
												<td>-</td>
												<td>X</td>
											</tr>
											<tr class="gradeX">
												<td>Misc</td>
												<td>Lynx</td>
												<td>Text only</td>
												<td>-</td>
												<td>X</td>
											</tr>
											<tr class="gradeC">
												<td>Misc</td>
												<td>IE Mobile</td>
												<td>Windows Mobile 6</td>
												<td>-</td>
												<td>C</td>
											</tr>
											<tr class="gradeC">
												<td>Misc</td>
												<td>PSP browser</td>
												<td>PSP</td>
												<td>-</td>
												<td>C</td>
											</tr>
											<tr class="gradeU">
												<td>Other browsers</td>
												<td>All others</td>
												<td>-</td>
												<td>-</td>
												<td>U</td>
											</tr>
										</tbody>
									</table>
								</div><!--end .table-responsive -->
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END DATATABLE 1 -->

						<hr class="ruler-xxl"/>

						<!-- BEGIN DATATABLE 2 -->
						<div class="row">
							<div class="col-md-12">
								<h4>Example 2: Tabletools & row details</h4>
							</div><!--end .col -->
							<div class="col-lg-12">
								<div class="table-responsive">
									<table id="datatable2" class="table order-column hover" data-source="data/users.json" data-swftools="<?php echo base_url(); ?>assets/js/libs/DataTables/extensions/TableTools/swf/copy_csv_xls_pdf.swf">
										<thead>
											<tr>
												<th></th>
												<th>Name</th>
												<th>Position</th>
												<th>Office</th>
												<th>Salary</th>
											</tr>
										</thead>
									</table>
								</div><!--end .table-responsive -->
							</div><!--end .col -->
						</div><!--end .row -->
						<!-- END DATATABLE 2 -->

					</div><!--end .section-body -->
				</section>
			</div><!--end #content-->
			<!-- END CONTENT -->

			<!-- BEGIN MENUBAR-->
			<div id="menubar" class="menubar-inverse ">
				<div class="menubar-fixed-panel">
					<div>
						<a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
							<i class="fa fa-bars"></i>
						</a>
					</div>
					<div class="expanded">
						<a href="<?php echo base_url(); ?>html/dashboards/dashboard.html">
							<span class="text-lg text-bold text-primary ">MATERIAL&nbsp;ADMIN</span>
						</a>
					</div>
				</div>
				<div class="menubar-scroll-panel">

					<!-- BEGIN MAIN MENU -->
					<ul id="main-menu" class="gui-controls">

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="<?php echo base_url(); ?>html/dashboards/dashboard.html" >
								<div class="gui-icon"><i class="md md-home"></i></div>
								<span class="title">Dashboard</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN EMAIL -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-email"></i></div>
								<span class="title">Email</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="<?php echo base_url(); ?>html/mail/inbox.html" ><span class="title">Inbox</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/mail/compose.html" ><span class="title">Compose</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/mail/reply.html" ><span class="title">Reply</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/mail/message.html" ><span class="title">View message</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END EMAIL -->

						<!-- BEGIN DASHBOARD -->
						<li>
							<a href="<?php echo base_url(); ?>html/layouts/builder.html" >
								<div class="gui-icon"><i class="md md-web"></i></div>
								<span class="title">Layouts</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END DASHBOARD -->

						<!-- BEGIN UI -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-puzzle-piece fa-fw"></i></div>
								<span class="title">UI elements</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="<?php echo base_url(); ?>html/ui/colors.html" ><span class="title">Colors</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/ui/typography.html" ><span class="title">Typography</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/ui/cards.html" ><span class="title">Cards</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/ui/buttons.html" ><span class="title">Buttons</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/ui/lists.html" ><span class="title">Lists</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/ui/tabs.html" ><span class="title">Tabs</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/ui/accordions.html" ><span class="title">Accordions</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/ui/messages.html" ><span class="title">Messages</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/ui/offcanvas.html" ><span class="title">Off-canvas</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/ui/grid.html" ><span class="title">Grid</span></a></li>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Icons</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="<?php echo base_url(); ?>html/ui/icons/materialicons.html" ><span class="title">Material Design Icons</span></a></li>
										<li><a href="<?php echo base_url(); ?>html/ui/icons/fontawesome.html" ><span class="title">Font Awesome</span></a></li>
										<li><a href="<?php echo base_url(); ?>html/ui/icons/glyphicons.html" ><span class="title">Glyphicons</span></a></li>
										<li><a href="<?php echo base_url(); ?>html/ui/icons/skycons.html" ><span class="title">Skycons</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END UI -->

						<!-- BEGIN TABLES -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-table"></i></div>
								<span class="title">Tables</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="<?php echo base_url(); ?>html/tables/static.html" ><span class="title">Static Tables</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/tables/dynamic.html" class="active"><span class="title">Dynamic Tables</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/tables/responsive.html" ><span class="title">Responsive Table</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END TABLES -->

						<!-- BEGIN FORMS -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><span class="glyphicon glyphicon-list-alt"></span></div>
								<span class="title">Forms</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="<?php echo base_url(); ?>html/forms/basic.html" ><span class="title">Form basic</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/forms/advanced.html" ><span class="title">Form advanced</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/forms/layouts.html" ><span class="title">Form layouts</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/forms/editors.html" ><span class="title">Editors</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/forms/validation.html" ><span class="title">Form validation</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/forms/wizard.html" ><span class="title">Form wizard</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END FORMS -->

						<!-- BEGIN PAGES -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="md md-computer"></i></div>
								<span class="title">Pages</span>
							</a>
							<!--start submenu -->
							<ul>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Contacts</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="<?php echo base_url(); ?>html/pages/contacts/search.html" ><span class="title">Search</span></a></li>
										<li><a href="<?php echo base_url(); ?>html/pages/contacts/details.html" ><span class="title">Contact card</span></a></li>
										<li><a href="<?php echo base_url(); ?>html/pages/contacts/add.html" ><span class="title">Insert contact</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Search</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="<?php echo base_url(); ?>html/pages/search/results-text.html" ><span class="title">Results - Text</span></a></li>
										<li><a href="<?php echo base_url(); ?>html/pages/search/results-text-image.html" ><span class="title">Results - Text and Image</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Blog</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="<?php echo base_url(); ?>html/pages/blog/masonry.html" ><span class="title">Blog masonry</span></a></li>
										<li><a href="<?php echo base_url(); ?>html/pages/blog/list.html" ><span class="title">Blog list</span></a></li>
										<li><a href="<?php echo base_url(); ?>html/pages/blog/post.html" ><span class="title">Blog post</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Error pages</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="<?php echo base_url(); ?>html/pages/404.html" ><span class="title">404 page</span></a></li>
										<li><a href="<?php echo base_url(); ?>html/pages/500.html" ><span class="title">500 page</span></a></li>
									</ul><!--end /submenu -->
								</li><!--end /menu-li -->
								<li><a href="<?php echo base_url(); ?>html/pages/profile.html" ><span class="title">User profile<span class="badge style-accent">42</span></span></a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/invoice.html" ><span class="title">Invoice</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/calendar.html" ><span class="title">Calendar</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/pricing.html" ><span class="title">Pricing</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/timeline.html" ><span class="title">Timeline</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/maps.html" ><span class="title">Maps</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/locked.html" ><span class="title">Lock screen</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/login.html" ><span class="title">Login</span></a></li>
								<li><a href="<?php echo base_url(); ?>html/pages/blank.html" ><span class="title">Blank page</span></a></li>
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END FORMS -->

						<!-- BEGIN CHARTS -->
						<li>
							<a href="<?php echo base_url(); ?>html/charts/charts.html" >
								<div class="gui-icon"><i class="md md-assessment"></i></div>
								<span class="title">Charts</span>
							</a>
						</li><!--end /menu-li -->
						<!-- END CHARTS -->

						<!-- BEGIN LEVELS -->
						<li class="gui-folder">
							<a>
								<div class="gui-icon"><i class="fa fa-folder-open fa-fw"></i></div>
								<span class="title">Menu levels demo</span>
							</a>
							<!--start submenu -->
							<ul>
								<li><a href="#"><span class="title">Item 1</span></a></li>
								<li><a href="#"><span class="title">Item 1</span></a></li>
								<li class="gui-folder">
									<a href="javascript:void(0);">
										<span class="title">Open level 2</span>
									</a>
									<!--start submenu -->
									<ul>
										<li><a href="#"><span class="title">Item 2</span></a></li>
										<li class="gui-folder">
											<a href="javascript:void(0);">
												<span class="title">Open level 3</span>
											</a>
											<!--start submenu -->
											<ul>
												<li><a href="#"><span class="title">Item 3</span></a></li>
												<li><a href="#"><span class="title">Item 3</span></a></li>
												<li class="gui-folder">
													<a href="javascript:void(0);">
														<span class="title">Open level 4</span>
													</a>
													<!--start submenu -->
													<ul>
														<li><a href="#"><span class="title">Item 4</span></a></li>
														<li class="gui-folder">
															<a href="javascript:void(0);">
																<span class="title">Open level 5</span>
															</a>
															<!--start submenu -->
															<ul>
																<li><a href="#"><span class="title">Item 5</span></a></li>
																<li><a href="#"><span class="title">Item 5</span></a></li>
															</ul><!--end /submenu -->
														</li><!--end /submenu-li -->
													</ul><!--end /submenu -->
												</li><!--end /submenu-li -->
											</ul><!--end /submenu -->
										</li><!--end /submenu-li -->
									</ul><!--end /submenu -->
								</li><!--end /submenu-li -->
							</ul><!--end /submenu -->
						</li><!--end /menu-li -->
						<!-- END LEVELS -->

					</ul><!--end .main-menu -->
					<!-- END MAIN MENU -->

					<div class="menubar-foot-panel">
						<small class="no-linebreak hidden-folded">
							<span class="opacity-75">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
						</small>
					</div>
				</div><!--end .menubar-scroll-panel-->
			</div><!--end #menubar-->
			<!-- END MENUBAR -->

			<!-- BEGIN OFFCANVAS RIGHT -->
			<div class="offcanvas">

				<!-- BEGIN OFFCANVAS SEARCH -->
				<div id="offcanvas-search" class="offcanvas-pane width-8">
					<div class="offcanvas-head">
						<header class="text-primary">Search</header>
						<div class="offcanvas-tools">
							<a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
								<i class="md md-close"></i>
							</a>
						</div>
					</div>
					<div class="offcanvas-body no-padding">
						<ul class="list ">
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>A</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="<?php echo base_url(); ?>assets/img/avatar4.jpg?1404026791" alt="" />
									</div>
									<div class="tile-text">
										Alex Nelson
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="<?php echo base_url(); ?>assets/img/avatar9.jpg?1404026744" alt="" />
									</div>
									<div class="tile-text">
										Ann Laurens
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>J</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="<?php echo base_url(); ?>assets/img/avatar2.jpg?1404026449" alt="" />
									</div>
									<div class="tile-text">
										Jessica Cruise
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="<?php echo base_url(); ?>assets/img/avatar8.jpg?1404026729" alt="" />
									</div>
									<div class="tile-text">
										Jim Peters
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>M</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="<?php echo base_url(); ?>assets/img/avatar5.jpg?1404026513" alt="" />
									</div>
									<div class="tile-text">
										Mabel Logan
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="<?php echo base_url(); ?>assets/img/avatar11.jpg?1404026774" alt="" />
									</div>
									<div class="tile-text">
										Mary Peterson
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="<?php echo base_url(); ?>assets/img/avatar3.jpg?1404026799" alt="" />
									</div>
									<div class="tile-text">
										Mike Alba
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>N</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="<?php echo base_url(); ?>assets/img/avatar6.jpg?1404026572" alt="" />
									</div>
									<div class="tile-text">
										Nathan Peterson
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>P</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="<?php echo base_url(); ?>assets/img/avatar7.jpg?1404026721" alt="" />
									</div>
									<div class="tile-text">
										Philip Ericsson
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
							<li class="tile divider-full-bleed">
								<div class="tile-content">
									<div class="tile-text"><strong>S</strong></div>
								</div>
							</li>
							<li class="tile">
								<a class="tile-content ink-reaction" href="#offcanvas-chat" data-toggle="offcanvas" data-backdrop="false">
									<div class="tile-icon">
										<img src="<?php echo base_url(); ?>assets/img/avatar10.jpg?1404026762" alt="" />
									</div>
									<div class="tile-text">
										Samuel Parsons
										<small>123-123-3210</small>
									</div>
								</a>
							</li>
						</ul>
					</div><!--end .offcanvas-body -->
				</div><!--end .offcanvas-pane -->
				<!-- END OFFCANVAS SEARCH -->

				<!-- BEGIN OFFCANVAS CHAT -->
				<div id="offcanvas-chat" class="offcanvas-pane style-default-light width-12">
					<div class="offcanvas-head style-default-bright">
						<header class="text-primary">Chat with Ann Laurens</header>
						<div class="offcanvas-tools">
							<a class="btn btn-icon-toggle btn-default-light pull-right" data-dismiss="offcanvas">
								<i class="md md-close"></i>
							</a>
							<a class="btn btn-icon-toggle btn-default-light pull-right" href="#offcanvas-search" data-toggle="offcanvas" data-backdrop="false">
								<i class="md md-arrow-back"></i>
							</a>
						</div>
						<form class="form">
							<div class="form-group floating-label">
								<textarea name="sidebarChatMessage" id="sidebarChatMessage" class="form-control autosize" rows="1"></textarea>
								<label for="sidebarChatMessage">Leave a message</label>
							</div>
						</form>
					</div>
					<div class="offcanvas-body">
						<ul class="list-chats">
							<li>
								<div class="chat">
									<div class="chat-avatar"><img class="img-circle" src="<?php echo base_url(); ?>assets/img/avatar1.jpg?1403934956" alt="" /></div>
									<div class="chat-body">
										Yes, it is indeed very beautiful.
										<small>10:03 pm</small>
									</div>
								</div><!--end .chat -->
							</li>
							<li class="chat-left">
								<div class="chat">
									<div class="chat-avatar"><img class="img-circle" src="<?php echo base_url(); ?>assets/img/avatar9.jpg?1404026744" alt="" /></div>
									<div class="chat-body">
										Did you see the changes?
										<small>10:02 pm</small>
									</div>
								</div><!--end .chat -->
							</li>
							<li>
								<div class="chat">
									<div class="chat-avatar"><img class="img-circle" src="<?php echo base_url(); ?>assets/img/avatar1.jpg?1403934956" alt="" /></div>
									<div class="chat-body">
										I just arrived at work, it was quite busy.
										<small>06:44pm</small>
									</div>
									<div class="chat-body">
										I will take look in a minute.
										<small>06:45pm</small>
									</div>
								</div><!--end .chat -->
							</li>
							<li class="chat-left">
								<div class="chat">
									<div class="chat-avatar"><img class="img-circle" src="<?php echo base_url(); ?>assets/img/avatar9.jpg?1404026744" alt="" /></div>
									<div class="chat-body">
										The colors are much better now.
									</div>
									<div class="chat-body">
										The colors are brighter than before.
										I have already sent an example.
										This will make it look sharper.
										<small>Mon</small>
									</div>
								</div><!--end .chat -->
							</li>
							<li>
								<div class="chat">
									<div class="chat-avatar"><img class="img-circle" src="<?php echo base_url(); ?>assets/img/avatar1.jpg?1403934956" alt="" /></div>
									<div class="chat-body">
										Are the colors of the logo already adapted?
										<small>Last week</small>
									</div>
								</div><!--end .chat -->
							</li>
						</ul>
					</div><!--end .offcanvas-body -->
				</div><!--end .offcanvas-pane -->
				<!-- END OFFCANVAS CHAT -->

			</div><!--end .offcanvas-->
			<!-- END OFFCANVAS RIGHT -->

		</div><!--end #base-->
		<!-- END BASE -->

<!-- BEGIN JAVASCRIPT -->
<!-- END JAVASCRIPT -->

	</body>
</html>