<?php
echo form_open('login_conroller/login');
echo form_label('username','username');
echo form_input('fname','fname');
echo form_submit('submit','Login');
?>