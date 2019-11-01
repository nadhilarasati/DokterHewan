<?php 
function check_already_login() {
	$ci =& get_instance();
	$user_session=$ci->session->userdata('email');
	if($user_session) {
		redirect('UserProfile/index');
	}
}

function check_not_login() {
	$ci =& get_instance();
	$user_session=$ci->session->userdata('email');
	if( !$user_session) {
		redirect('index/login');
	}
}
