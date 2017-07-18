<?php 

session_start();
include_once("_visionneuse.php");

createVisio();
if( htmlspecialchars($_POST['action']) == 'addItem') {
	$datas = array(
		'title'              => htmlspecialchars($_POST['title']),
		'filename'          => htmlspecialchars($_POST['filename']),
		'picture'            => htmlspecialchars($_POST['picture'])
	);
	addVisioItem( $datas['title'], $datas['filename'], $datas['picture'] );
} else if ( htmlspecialchars($_POST['action']) == 'removeItem'){
	removeVisioItem( htmlspecialchars($_POST['picture']) );
} else if ( htmlspecialchars($_POST['action']) == 'trashVisio'){
	deleteVisio();
} 