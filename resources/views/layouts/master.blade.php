<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="SoengSouy Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
	<meta name="author" content="SoengSouy Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Dashboard - HRMS</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/img/favicon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{ URL::to('assets/css/font-awesome.min.css') }}">
	<!-- Lineawesome CSS -->
	<link rel="stylesheet" href="{{ URL::to('assets/css/line-awesome.min.css') }}">
	<!-- Datatable CSS -->
	<link rel="stylesheet" href="{{ URL::to('assets/css/dataTables.bootstrap4.min.css') }}">
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{ URL::to('assets/css/select2.min.css') }}">
	<!-- Datetimepicker CSS -->
	<link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-datetimepicker.min.css') }}">
	<!-- Chart CSS -->
	<link rel="stylesheet" href="{{ URL::to('ssets/plugins/morris/morris.css') }}">
	<!-- Main CSS -->
	<link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">

	{{-- message toastr --}}
	<link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
	<script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
</head>

<body>
	<style>    
		.invalid-feedback{
			font-size: 14px;
		}
	</style>
	<!-- Main Wrapper -->
	<div class="main-wrapper">
		
		<!-- Header -->
		{{-- @yield('nav') --}}
		<div class="header">
			<!-- Logo -->
			<div class="header-left">
				<a href="{{ route('home') }}" class="logo"> <img src="{{ URL::to('assets/img/logo.png') }}" width="40" height="40" alt=""> </a>
			</div>
			<!-- /Logo -->
			<a id="toggle_btn" href="javascript:void(0);">
				<span class="bar-icon"><span></span><span></span><span></span></span>
			</a>
			<!-- Header Title -->
			<div class="page-title-box">
				<h3>{{ Auth::user()->name }}</h3>
			</div>
			<!-- /Header Title -->
			<a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>
			<!-- Header Menu -->
			<ul class="nav user-menu">
				<!-- Search -->
				<li class="nav-item">
					<div class="top-nav-search">
						<a href="javascript:void(0);" class="responsive-search"> <i class="fa fa-search"></i> </a>
						<form action="search.html">
							<input class="form-control" type="text" placeholder="Search here">
							<button class="btn" type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</li>
				<!-- /Search -->
				<!-- Flag -->
				<li class="nav-item dropdown has-arrow flag-nav">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"> <img src="{{ URL::to('assets/img/flags/us.png') }}" alt="" height="20"> <span>English</span> </a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:void(0);" class="dropdown-item"> <img src="{{ URL::to('assets/img/flags/us.png') }}" alt="" height="16"> English </a>
						<a href="javascript:void(0);" class="dropdown-item"> <img src="{{ URL::to('assets/img/flags/kh.png') }}" alt="" height="16"> Khmer </a>
					</div>
				</li>
				<!-- /Flag -->
				<!-- Notifications -->
				<li class="nav-item dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="activities.html">
										<div class="media"> <span class="avatar">
													<img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
												</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media"> <span class="avatar">
													<img alt="" src="{{ URL::to('assets/img/profiles/avatar-03.jpg') }}">
												</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media"> <span class="avatar">
													<img alt="" src="{{ URL::to('assets/img/profiles/avatar-06.jpg') }}">
												</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media"> <span class="avatar">
													<img alt="" src="{{ URL::to('assets/img/profiles/avatar-17.jpg') }}">
												</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="activities.html">
										<div class="media"> <span class="avatar">
													<img alt="" src="{{ URL::to('assets/img/profiles/avatar-13.jpg') }}">
												</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer"> <a href="activities.html">View all Notifications</a> </div>
					</div>
				</li>
				<!-- /Notifications -->
				<!-- Message Notifications -->
				<li class="nav-item dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fa fa-comment-o"></i> <span class="badge badge-pill">8</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Messages</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left"> <span class="avatar">
														<img alt="" src="{{ URL::to('assets/img/profiles/avatar-09.jpg') }}">
													</span> </div>
											<div class="list-body"> <span class="message-author">Richard Miles </span> <span class="message-time">12:28 AM</span>
												<div class="clearfix"></div> <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span> </div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left"> <span class="avatar">
														<img alt="" src="{{ URL::to('assets/img/profiles/avatar-02.jpg') }}">
													</span> </div>
											<div class="list-body"> <span class="message-author">John Doe</span> <span class="message-time">6 Mar</span>
												<div class="clearfix"></div> <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span> </div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left"> <span class="avatar">
														<img alt="" src="{{ URL::to('assets/img/profiles/avatar-03.jpg') }}">
													</span> </div>
											<div class="list-body"> <span class="message-author"> Tarah Shropshire </span> <span class="message-time">5 Mar</span>
												<div class="clearfix"></div> <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span> </div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left"> <span class="avatar">
														<img alt="" src="{{ URL::to('assets/img/profiles/avatar-05.jpg') }}">
													</span> </div>
											<div class="list-body"> <span class="message-author">Mike Litorus</span> <span class="message-time">3 Mar</span>
												<div class="clearfix"></div> <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span> </div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="chat.html">
										<div class="list-item">
											<div class="list-left">
												<span class="avatar">
													<img alt="" src="{{ URL::to('assets/img/profiles/avatar-08.jpg') }}">
												</span>
											</div>
											<div class="list-body"> <span class="message-author"> Catherine Manseau </span> <span class="message-time">27 Feb</span>
											<div class="clearfix"></div> <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span> </div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer"> <a href="chat.html">View all Messages</a> </div>
					</div>
				</li>
				<!-- /Message Notifications -->
				<li class="nav-item dropdown has-arrow main-drop">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
						<span class="user-img">
						<img src="{{ URL::to('/assets/images/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
						<span class="status online"></span></span>
						<span>{{ Auth::user()->name }}</span>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="{{ route('profile_user') }}">My Profile</a>
						<a class="dropdown-item" href="{{ route('company/settings/page') }}">Settings</a>
						<a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
					</div>
				</li>
			</ul>
			<!-- /Header Menu -->
			<!-- Mobile Menu -->
			<div class="dropdown mobile-user-menu">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-ellipsis-v"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="profile.html">My Profile</a> 
					<a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
				</div>
			</div>
			<!-- /Mobile Menu -->
		</div>
		<!-- /Header -->
		<!-- Sidebar -->
		{{-- @yield('menu') --}}
		<!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">
                        <span>Main</span>
                    </li>
                    <li class="submenu">
                        <a href="#" class="noti-dot">
                            <i class="la la-dashboard"></i>
                            <span> Dashboard</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a class="{{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">Admin Dashboard</a></li>
                            <li><a href="{{ route('em/dashboard') }}">Employee Dashboard</a></li>
                        </ul>
                    </li>
                    @if (Auth::user()->role_name=='Admin')
                        <li class="menu-title"> <span>Authentication</span> </li>
                        <li class="submenu">
                            <a href="#">
                                <i class="la la-user-secret"></i> <span> User Controller</span> <span class="menu-arrow"></span>
                            </a>
                            <ul style="display: none;">
                                <li><a href="{{ route('userManagement') }}">All User</a></li>
                                <li><a href="{{ route('activity/log') }}">Activity Log</a></li>
                                <li><a href="{{ route('activity/login/logout') }}">Activity User</a></li>
                            </ul>
                        </li>
                    @endif
                    {{-- <li class="menu-title"> <span>Employees</span> </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('all/employee/card') }}">All Employees</a></li>
                            <li><a href="{{ route('form/holidays/new') }}">Holidays</a></li>
                            <li><a href="{{ route('form/leaves/new') }}">Leaves (Admin) 
                                <span class="badge badge-pill bg-primary float-right">1</span></a>
                            </li>
                            <li><a href="{{route('form/leavesemployee/new')}}">Leaves (Employee)</a></li>
                            <li><a href="{{ route('form/leavesettings/page') }}">Leave Settings</a></li>
                            <li><a href="{{ route('attendance/page') }}">Attendance (Admin)</a></li>
                            <li><a href="{{ route('attendance/employee/page') }}">Attendance (Employee)</a></li>
                            <li><a href="{{ route('form/departments/page') }}">Departments</a></li>
                            <li><a href="{{ route('form/designations/page') }}">Designations</a></li>
                            <li><a href="{{ route('form/timesheet/page') }}">Timesheet</a></li>
                            <li><a href="{{ route('form/shiftscheduling/page') }}">Shift & Schedule</a></li>
                            <li><a href="{{ route('form/overtime/page') }}">Overtime</a></li>
                        </ul>
                    </li> --}}
					
                    {{-- <li class="menu-title"> <span>HR</span> </li>
                    <li class="submenu">
                        <a href="#">
                            <i class="la la-files-o"></i>
                            <span> Sales </span> 
                            <span class="menu-arrow"></span>
                        </a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/estimates/page') }}">Estimates</a></li>
                            <li><a href="{{ route('payments') }}">Payments</a></li>
                            <li><a href="{{ route('expenses/page') }}">Expenses</a></li>
                            <li><a href="provident-fund.html">Provident Fund</a></li>
                            <li><a href="taxes.html">Taxes</a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-money"></i>
                        <span> Payroll </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/salary/page') }}"> Employee Salary </a></li>
                            <li><a href="{{ url('form/salary/view') }}"> Payslip </a></li>
                            <li><a href="{{ route('form/payroll/items') }}"> Payroll Items </a></li>
                        </ul>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-pie-chart"></i>
                        <span> Reports </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/expense/reports/page') }}"> Expense Report </a></li>
                            <li><a href="{{ route('form/invoice/reports/page') }}"> Invoice Report </a></li>
                            <li><a href="payments-reports.html"> Payments Report </a></li>
                            <li><a href="employee-reports.html"> Employee Report </a></li>
                            <li><a href="payslip-reports.html"> Payslip Report </a></li>
                            <li><a href="attendance-reports.html"> Attendance Report </a></li>
                            <li><a href="{{ route('form/leave/reports/page') }}"> Leave Report </a></li>
                            <li><a href="{{ route('form/daily/reports/page') }}"> Daily Report </a></li>
                        </ul>
                    </li> --}}

                    {{-- <li class="menu-title"> <span>Performance</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-graduation-cap"></i>
                        <span> Performance </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{ route('form/performance/indicator/page') }}"> Performance Indicator </a></li>
                            <li><a href="{{ route('form/performance/page') }}"> Performance Review </a></li>
                            <li><a href="{{ route('form/performance/appraisal/page') }}"> Performance Appraisal </a></li>
                        </ul>
                    </li> --}}

					<li class="menu-title"> <span>Konsultasi</span>
                    <li class="submenu"> <a href="#"><i class="la la-edit"></i>
                        <span> Konsultasi </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="{{ Route::is('form/training/list/page') ? 'active' : '' }}" href="{{ route('form/training/list/page') }}"> Penjadwalan </a></li>
                            <li><a class="{{ Route::is('form/trainers/list/page') ? 'active' : '' }}" href="{{ route('form/trainers/list/page') }}"> Dokter</a></li>
                            <li><a class="{{ Route::is('form/training/type/list/page') ? 'active' : '' }}"href="{{ route('form/training/type/list/page') }}"> Jenis Tindakan </a></li>
                        </ul>
                    </li>

                    {{-- <li class="menu-title"> <span>Administration</span> </li>
                    <li> <a href="assets.html"><i class="la la-object-ungroup">
                        </i> <span>Assets</span></a>
                    </li>
                    <li class="submenu"> <a href="#"><i class="la la-briefcase"></i>
                        <span> Jobs </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="user-dashboard.html"> User Dasboard </a></li>
                            <li><a href="jobs-dashboard.html"> Jobs Dasboard </a></li>
                            <li><a href="jobs.html"> Manage Jobs </a></li>
                            <li><a href="manage-resumes.html"> Manage Resumes </a></li>
                            <li><a href="shortlist-candidates.html"> Shortlist Candidates </a></li>
                            <li><a href="interview-questions.html"> Interview Questions </a></li>
                            <li><a href="offer_approvals.html"> Offer Approvals </a></li>
                            <li><a href="experiance-level.html"> Experience Level </a></li>
                            <li><a href="candidates.html"> Candidates List </a></li>
                            <li><a href="schedule-timing.html"> Schedule timing </a></li>
                            <li><a href="apptitude-result.html"> Aptitude Results </a></li>
                        </ul>
                    </li> --}}

                    {{-- <li class="menu-title"> <span>Pages</span> </li>
                    <li class="submenu"> <a href="#"><i class="la la-user"></i>
                        <span> Profile </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="profile.html"> Employee Profile </a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
	<!-- /Sidebar -->
		<!-- /Sidebar -->
		<!-- Page Wrapper -->
		@yield('content')
		<!-- /Page Wrapper -->
	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="{{ URL::to('assets/js/jquery-3.5.1.min.js') }}"></script>
	<!-- Bootstrap Core JS -->
	<script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
	<!-- Chart JS -->
	<script src="{{ URL::to('assets/plugins/morris/morris.min.js') }}"></script>
	<script src="{{ URL::to('assets/plugins/raphael/raphael.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/chart.js') }}"></script>
	<!-- Slimscroll JS -->
	<script src="{{ URL::to('assets/js/jquery.slimscroll.min.js') }}"></script>
	<!-- Select2 JS -->
	<script src="{{ URL::to('assets/js/select2.min.js') }}"></script>
	<!-- Datetimepicker JS -->
	<script src="{{ URL::to('assets/js/moment.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
	<!-- Datatable JS -->
	<script src="{{ URL::to('assets/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ URL::to('assets/js/dataTables.bootstrap4.min.js') }}"></script>
	<!-- Multiselect JS -->
	<script src="{{ URL::to('assets/js/multiselect.min.js') }}"></script>		
	<!-- Custom JS -->
	<script src="{{ URL::to('assets/js/app.js') }}"></script>
	
	@yield('script')
</body>
</html>