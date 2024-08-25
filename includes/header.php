<?php
session_start();
  
  if(!isset($_SESSION['loggedIn'])){
    header('location:login.php');
  }
  $logged_id= $_SESSION['logged_id'];
  $select="SELECT * FROM users WHERE id='$logged_id'";
  $select_log=mysqli_query($db_connection,$select);
  $after_assoc_log=mysqli_fetch_assoc($select_log);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Gymove - Fitness Bootstrap Admin Dashboard</title>
    <!-- Favicon icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="icon" type="image/png" sizes="16x16" href="/register2/deshboard_asset/images/favicon.png">
	<link rel="stylesheet" href="/register2/deshboard_asset/vendor/chartist/css/chartist.min.css">
    <link href="/register2/deshboard_asset/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="/register2/deshboard_asset/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="/register2/deshboard_asset/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	 <style>
		.card{
			height: auto;
		}
	 </style>
</head>
 
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="/register2/deshboard_asset/images/logo.png" alt="">
                <img class="logo-compact" src="/register2/deshboard_asset/images/logo-text.png" alt="">
                <img class="brand-title" src="/register2/deshboard_asset/images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		<div class="chatbox">
			<div class="chatbox-close"></div>
			<div class="custom-tab-1">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade active show" id="chat" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Chat List</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
								<ul class="contacts">
									<li class="name-first-letter">A</li>
									<li class="active dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Archie Parker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Alfie Mason</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">B</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Bashid Samim</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Breddie Ronan</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Ceorge Carson</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">D</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Darry Parker</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Denry Hunter</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">J</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Jack Ronan</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/1.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Jacob Tucker</span>
												<p>Kalid is online</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/2.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>James Logan</span>
												<p>Taherah left 7 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/3.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon"></span>
											</div>
											<div class="user_info">
												<span>Joshua Weston</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">O</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/4.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oliver Acker</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
									<li class="dz-chat-user">
										<div class="d-flex bd-highlight">
											<div class="img_cont">
												<img src="images/avatar/5.jpg" class="rounded-circle user_img" alt=""/>
												<span class="online_icon offline"></span>
											</div>
											<div class="user_info">
												<span>Oscar Weston</span>
												<p>Rashid left 50 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="card chat dz-chat-history-box d-none">
							<div class="card-header chat-list-header text-center">
								<!--  <a href="javascript:void(0)" class="dz-chat-history-back">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
								</a> -->
								<div>
									<h6 class="mb-1">Chat with Khelesh</h6>
									<p class="mb-0 text-success">Online</p>
								</div>							
								<div class="dropdown">
									<a href="javascript:void(0)" data-toggle="dropdown" ><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
										<li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add to close friends</li>
										<li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to group</li>
										<li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block</li>
									</ul>
								</div>
							</div>
							<div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Hi, how are you samim?
										<span class="msg_time">8:40 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Hi Khalid i am good tnx how about you?
										<span class="msg_time_send">8:55 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am good too, thank you for your chat template
										<span class="msg_time">9:00 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										You are welcome
										<span class="msg_time_send">9:05 AM, Today</span>
									</div>
									<div class="img_cont_msg">
								<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										I am looking for your next templates
										<span class="msg_time">9:07 AM, Today</span>
									</div>
								</div>
								<div class="d-flex justify-content-end mb-4">
									<div class="msg_cotainer_send">
										Ok, thank you have a good day
										<span class="msg_time_send">9:10 AM, Today</span>
									</div>
									<div class="img_cont_msg">
										<img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
								</div>
								<div class="d-flex justify-content-start mb-4">
									<div class="img_cont_msg">
										<img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt=""/>
									</div>
									<div class="msg_cotainer">
										Bye, see you
										<span class="msg_time">9:12 AM, Today</span>
									</div>
								</div>
							</div>
							<div class="card-footer type_msg">
								<div class="input-group">
									<textarea class="form-control" placeholder="Type your message..."></textarea>
									<div class="input-group-append">
										<button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="alerts" role="tabpanel">
						<div class="card mb-sm-3 mb-md-0 contacts_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notications</h6>
									<p class="mb-0">Show All</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
								<ul class="contacts">
									<li class="name-first-letter">SEVER STATUS</li>
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">KK</div>
											<div class="user_info">
												<span>David Nester Birthday</span>
												<p class="text-primary">Today</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SOCIAL</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont success">RU<i class="icon fa-birthday-cake"></i></div>
											<div class="user_info">
												<span>Perfection Simplified</span>
												<p>Jame Smith commented on your status</p>
											</div>
										</div>
									</li>
									<li class="name-first-letter">SEVER STATUS</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>AharlieKane</span>
												<p>Sami is online</p>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>Nargis left 30 mins ago</p>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="card-footer"></div>
						</div>
					</div>
					<div class="tab-pane fade" id="notes">
						<div class="card mb-sm-3 mb-md-0 note_card">
							<div class="card-header chat-list-header text-center">
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"/><rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) " x="4" y="11" width="16" height="2" rx="1"/></g></svg></a>
								<div>
									<h6 class="mb-1">Notes</h6>
									<p class="mb-0">Add New Nots</p>
								</div>
								<a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"/></g></svg></a>
							</div>
							<div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
								<ul class="contacts">
									<li class="active">
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>New order placed..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Youtube, a video-sharing website..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>john just buy your product..</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex bd-highlight">
											<div class="user_info">
												<span>Athan Jacoby</span>
												<p>10 Aug 2020</p>
											</div>
											<div class="ml-auto">
												<a href="javascript:void(0)" class="btn btn-primary btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
												<a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								Dashboard
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								 
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <div class="dropdown-menu rounded dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="javascript:void(0)">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                              
                            
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0)" data-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M23.625 6.12506H22.75V2.62506C22.75 2.47268 22.7102 2.32295 22.6345 2.19068C22.5589 2.05841 22.45 1.94819 22.3186 1.87093C22.1873 1.79367 22.0381 1.75205 21.8857 1.75019C21.7333 1.74832 21.5831 1.78629 21.4499 1.86031L14 5.99915L6.55007 1.86031C6.41688 1.78629 6.26667 1.74832 6.11431 1.75019C5.96194 1.75205 5.8127 1.79367 5.68136 1.87093C5.55002 1.94819 5.44113 2.05841 5.36547 2.19068C5.28981 2.32295 5.25001 2.47268 5.25 2.62506V6.12506H4.375C3.67904 6.12582 3.01181 6.40263 2.51969 6.89475C2.02757 7.38687 1.75076 8.0541 1.75 8.75006V11.3751C1.75076 12.071 2.02757 12.7383 2.51969 13.2304C3.01181 13.7225 3.67904 13.9993 4.375 14.0001H5.25V23.6251C5.25076 24.321 5.52757 24.9882 6.01969 25.4804C6.51181 25.9725 7.17904 26.2493 7.875 26.2501H20.125C20.821 26.2493 21.4882 25.9725 21.9803 25.4804C22.4724 24.9882 22.7492 24.321 22.75 23.6251V14.0001H23.625C24.321 13.9993 24.9882 13.7225 25.4803 13.2304C25.9724 12.7383 26.2492 12.071 26.25 11.3751V8.75006C26.2492 8.0541 25.9724 7.38687 25.4803 6.89475C24.9882 6.40263 24.321 6.12582 23.625 6.12506ZM21 6.12506H17.3769L21 4.11256V6.12506ZM7 4.11256L10.6231 6.12506H7V4.11256ZM7 23.6251V14.0001H13.125V24.5001H7.875C7.64303 24.4998 7.42064 24.4075 7.25661 24.2434C7.09258 24.0794 7.0003 23.857 7 23.6251ZM21 23.6251C20.9997 23.857 20.9074 24.0794 20.7434 24.2434C20.5794 24.4075 20.357 24.4998 20.125 24.5001H14.875V14.0001H21V23.6251ZM24.5 11.3751C24.4997 11.607 24.4074 11.8294 24.2434 11.9934C24.0794 12.1575 23.857 12.2498 23.625 12.2501H4.375C4.14303 12.2498 3.92064 12.1575 3.75661 11.9934C3.59258 11.8294 3.5003 11.607 3.5 11.3751V8.75006C3.5003 8.51809 3.59258 8.2957 3.75661 8.13167C3.92064 7.96764 4.14303 7.87536 4.375 7.87506H23.625C23.857 7.87536 24.0794 7.96764 24.2434 8.13167C24.4074 8.2957 24.4997 8.51809 24.5 8.75006V11.3751Z" fill="#0B2A97"/>
									</svg>
									<div class="pulse-css"></div>
                                </a>
								<div class="dropdown-menu dropdown-menu-right rounded">
									<div id="DZ_W_TimeLine11Home" class="widget-timeline dz-scroll style-1 p-3 height370 ps ps--active-y">
										<ul class="timeline">
											<li>
												<div class="timeline-badge primary"></div>
												<a class="timeline-panel text-muted" href="#">
													<span>10 minutes ago</span>
													<h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge info">
												</div>
												 
											</li>
											<li>
												<div class="timeline-badge danger">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>30 minutes ago</span>
													<h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge success">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>15 minutes ago</span>
													<h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge warning">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
											<li>
												<div class="timeline-badge dark">
												</div>
												<a class="timeline-panel text-muted" href="#">
													<span>20 minutes ago</span>
													<h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
									 <?php if($after_assoc_log['Photo']==null){ ?>
                                    <img src="/register2/deshboard_asset/images/profile/17.jpg" width="20" alt=""/>
									<?php } else{?> 
									    <img src="/register2/uploads/users/<?=$after_assoc_log['Photo']?>" width="20" alt=""/>
									 <?php } ?>
									 <div class="header-info">
										<span class="text-black"><strong><?= $after_assoc_log['Name']?></strong></span>
										<?php if( $after_assoc_log['Role']!=null){?>
										<p class="fs-12 mb-0">
											<?php
											 if( $after_assoc_log['Role']==1){
                                                echo "Super Admin";
											 }elseif( $after_assoc_log['Role']==2){
												echo "Admin";
											 }elseif( $after_assoc_log['Role']==3){
												echo "Moderator";
											 }elseif( $after_assoc_log['Role']==4){
												echo "Editor";
											 }
											   
											   
											 ?>
										</p>
										<?php }?>
									</div>
									 
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="/register2/users/profile.php" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                   <!--  <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a> -->
                                    <a href="/register2/logout.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="/register2/deshboard.php">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                      <!--   <ul aria-expanded="false">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="workout-statistic.html">Workout Statistic</a></li>
							<li><a href="workoutplan.html">Workout Plan</a></li>
							<li><a href="distance-map.html">Distance Map</a></li>
							<li><a href="food-menu.html">Diet Food Menu</a></li>
							<li><a href="personal-record.html">Personal Record</a></li>
						</ul>  -->
                    </li>
                    <li><a class="has-arrow ai-icon" href="/register2/users/user.php"  >
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Users</span>
						</a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="./email-compose.html">Compose</a></li>
                                    <li><a href="./email-inbox.html">Inbox</a></li>
                                    <li><a href="./email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="./app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="./ecom-product-grid.html">Product Grid</a></li>
									<li><a href="./ecom-product-list.html">Product List</a></li>
									<li><a href="./ecom-product-detail.html">Product Details</a></li>
									<li><a href="./ecom-product-order.html">Order</a></li>
									<li><a href="./ecom-checkout.html">Checkout</a></li>
									<li><a href="./ecom-invoice.html">Invoice</a></li>
									<li><a href="./ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </li>
                    <li><a class="has-arrow ai-icon" href="/register2/logo/logo.php">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Logo</span>
						</a>
                       <!--    <ul aria-expanded="false">
                            <li><a href="./chart-flot.html">Flot</a></li>
                            <li><a href="./chart-morris.html">Morris</a></li>
                            <li><a href="./chart-chartjs.html">Chartjs</a></li>
                            <li><a href="./chart-chartist.html">Chartist</a></li>
                            <li><a href="./chart-sparkline.html">Sparkline</a></li>
                            <li><a href="./chart-peity.html">Peity</a></li>
                        </ul> -->  
                    </li>
                    <li><a class="has-arrow ai-icon" href="/register2/about/about.php" >
							<i class="flaticon-381-internet"></i>
							<span class="nav-text">About_Section</span>
						</a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">Accordion</a></li>
                            <li><a href="./ui-alert.html">Alert</a></li>
                            <li><a href="./ui-badge.html">Badge</a></li>
                            <li><a href="./ui-button.html">Button</a></li>
                            <li><a href="./ui-modal.html">Modal</a></li>
                            <li><a href="./ui-button-group.html">Button Group</a></li>
                            <li><a href="./ui-list-group.html">List Group</a></li>
                            <li><a href="./ui-media-object.html">Media Object</a></li>
                            <li><a href="./ui-card.html">Cards</a></li>
                            <li><a href="./ui-carousel.html">Carousel</a></li>
                            <li><a href="./ui-dropdown.html">Dropdown</a></li>
                            <li><a href="./ui-popover.html">Popover</a></li>
                            <li><a href="./ui-progressbar.html">Progressbar</a></li>
                            <li><a href="./ui-tab.html">Tab</a></li>
                            <li><a href="./ui-typography.html">Typography</a></li>
                            <li><a href="./ui-pagination.html">Pagination</a></li>
                            <li><a href="./ui-grid.html">Grid</a></li>

                        </ul> -->
                    </li>
                    <li><a class="has-arrow ai-icon" href="/register2/skills/skill.php">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">Skills</span>
						</a>
                     <!--    <ul aria-expanded="false">
                            <li><a href="./uc-select2.html">Select 2</a></li>
                            <li><a href="./uc-nestable.html">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.html">Toastr</a></li>
                            <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                            <li><a href="./uc-lightgallery.html">Lightgallery</a></li>
                        </ul> -->
                    </li>
                    <li><a href="/register2/services/services.php" class="ai-icon">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Services</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="/register2/portfolio/portfolio.php">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Portfolio</span>
						</a>
                       <!--  <ul aria-expanded="false">
                            <li><a href="./form-element.html">Form Elements</a></li>
                            <li><a href="./form-wizard.html">Wizard</a></li>
                            <li><a href="./form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul> -->
                    </li>
                    <li><a class="has-arrow ai-icon" href="/register2/testimonial/testimonial.php">
							<i class="flaticon-381-network"></i>
							<span class="nav-text">Testimonial</span>
						</a>
                      <!--   <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul> -->
                    </li>
                    <li><a class="has-arrow ai-icon" href="/register2/contact/contact.php">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Contact</span>
						</a>
                        <!-- <ul aria-expanded="false">
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                        </ul> -->
                    </li>
                </ul>
				<div class="add-menu-sidebar">
					<img src="images/calendar.png" alt="" class="mr-3">
					<p class="	font-w500 mb-0">Create Workout Plan Now</p>
				</div>
				<div class="copyright">
					<p><strong>Gymove Fitness Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid "> 