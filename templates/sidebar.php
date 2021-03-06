<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll">
						<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							<li class="sidebar-user-panel">
								<div class="user-panel">
									<div class="row">
										<div class="sidebar-userpic">
											<img src="assets/img/dp.jpg" class="img-responsive" alt=""> </div>
									</div>
									<div class="profile-usertitle">
										<div class="sidebar-userpic-name"> John Deo </div>
										
									</div>
									<div class="sidebar-userpic-btn">
										<a class="tooltips" href="user_profile.php" data-placement="top" data-original-title="Profile">
											<i class="material-icons">person_outline</i>
										</a>
										<a class="tooltips" href="#" data-placement="top" data-original-title="Mail">
											<i class="material-icons">mail_outline</i>
										</a>
										<a class="tooltips" href="#" data-placement="top" data-original-title="Chat">
											<i class="material-icons">chat</i>
										</a>
										<a class="tooltips" href="logout.php" data-placement="top" data-original-title="Logout">
											<i class="material-icons">input</i>
										</a>
									</div>
								</div>
							</li>							
							<li class="nav-item start <?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'active'; }else { echo ''; } ?>">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">dashboard</i>
									<span class="title">Dashboard</span>
									<span class="selected"></span>
									<span class="arrow open"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item active">
										<a href="index.php" class="nav-link ">
											<span class="title">Dashboard </span>
											<span class="selected"></span>
										</a>
									</li>
									
								</ul>
							</li>
							
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">business_center</i>
									<span class="title">Booking</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'new_booking.php'){echo 'active'; }else { echo ''; } ?>">
										<a href="new_booking.php" class="nav-link ">
											<span class="title">New Booking</span>
										</a>
									</li>
									<li class="nav-item ">
										<a href="view_booking.php" class="nav-link <?php if(basename($_SERVER['SCRIPT_NAME']) == 'view_booking.php'){echo 'active'; }else { echo ''; } ?>">
											<span class="title">View Booking</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">vpn_key</i>
									<span class="title">Rooms</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'add_room.php'){echo 'active'; }else { echo ''; } ?>">
										<a href="add_room.php" class="nav-link ">
											<span class="title">Add Room Details</span>
										</a>
									</li>
									<li class="nav-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'all_rooms.php'){echo 'active'; }else { echo ''; } ?>">
										<a href="all_rooms.php" class="nav-link ">
											<span class="title">View All Rooms</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">group</i>
									<span class="title">Staff</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="add_staff.php" class="nav-link ">
											<span class="title">Add Staff Details</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="all_staffs.php" class="nav-link ">
											<span class="title">View All Staffs</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle">
									<i class="material-icons">local_taxi</i>
									<span class="title">Transportation</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="add_vehicle.php" class="nav-link ">
											<span class="title">Add Vehicle Details</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="all_vehicles.php" class="nav-link ">
											<span class="title">View All Vehicle</span>
										</a>
									</li>
									
								</ul>
							</li>
						
							<li class="nav-item">
								<a href="#" class="nav-link nav-toggle"> <i class="material-icons">grain</i>
									<span class="title">Apps</span> <span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									<li class="nav-item">
										<a href="gallery.php" class="nav-link "> <span class="title">Gallery</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="support.php" class="nav-link "> <span class="title">Support</span>
										</a>
									</li>
									
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:;" class="nav-link nav-toggle"> <i class="material-icons">description</i>
									<span class="title">Extra pages</span>
									<span class="arrow"></span>
								</a>
								<ul class="sub-menu">
									
									<li class="nav-item">
										<a href="login.php" class="nav-link "> <span class="title">Login</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="sign_up.php" class="nav-link "> <span class="title">Registration</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="user_profile.php" class="nav-link "><span class="title">Profile</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="pricing.php" class="nav-link "><span class="title">Pricing</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="contactus.php" class="nav-link "> <span class="title">Contact
												Us</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="invoice.php" class="nav-link "><span class="title">Invoice</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="faq.php" class="nav-link "><span class="title">Faq</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="lock_screen.php" class="nav-link "> <span class="title">Lock
												Screen</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="page-404.php" class="nav-link "> <span class="title">404 Page</span>
										</a>
									</li>
									
									<li class="nav-item">
										<a href="blank_page.php" class="nav-link "> <span class="title">Blank
												Page</span>
										</a>
									</li>
								</ul>
							</li>
							
						</ul>
					</div>
				</div>
			</div>