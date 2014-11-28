<h2>Login</h2>

<?php 
	echo form_open('login/authenticate');
	echo validation_errors();
	echo "Username: ";
	echo form_input('username', '');
	echo form_error('username');
	echo "Password: ";
	echo form_password('password', '');
	echo form_submit('submit', 'Login');
	echo form_close();

?>