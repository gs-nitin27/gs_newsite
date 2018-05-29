<?php 

 $value = Session::get('lite_user_data');
 $value = session('lite_user_data');
 $sess_data = json_decode($value);
 print_r($sess_data);die;
?>