<?php

$action = $_GET['action'];
include 'ticket_list.php';
$crud = new Action();
if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'save_page_img'){
	$save = $crud->save_page_img();
	if($save)
		echo $save;
}
if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}
if($action == "save_customer"){
	$save = $crud->save_customer();
	if($save)
		echo $save;
}
if($action == "delete_customer"){
	$delete = $crud->delete_customer();
	if($delete)
		echo $delete;
}
if($action == "save_staff"){
	$save = $crud->save_staff();
	if($save)
		echo $save;
}
if($action == "delete_staff"){
	$delete = $crud->delete_staff();
	if($delete)
		echo $delete;
}
if($action == "save_department"){
	$save = $crud->save_department();
	if($save)
		echo $save;
}
if($action == "delete_department"){
	$delete = $crud->delete_department();
	if($delete)
		echo $delete;
}
if($action == "save_ticket"){
	$save = $crud->save_ticket();
	if($save)
		echo $save;
}
if($action == "deleteRow"){
	$delsete = $crud->deleteRow();
	if($delsete)
		echo $delsete;
}

if($action == "update_ticket"){
	$save = $crud->update_ticket();
	if($save)
		echo $save;
}
if($action == "save_comment"){
	$save = $crud->save_comment();
	if($save)
		echo $save;
}
if($action == "delete_comment"){
	$delsete = $crud->delete_comment();
	if($delsete)
		echo $delsete;
}

ob_end_flush();
?>
