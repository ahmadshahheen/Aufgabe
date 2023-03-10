<?php 

$tkCurrentUser = current_user_can(capability:'manage_option');
if (!$tkCurrentUser ) {
    wp_die(message:'You do not have permission to access this page');
 }
 ?>
 // Html code für das Admin des Plugin
 <div>

 <h1><?php  echo esc_html(get_admin_page_title())?></h1>
 <p> Here you can maneg your events</p>
 </div>