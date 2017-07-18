<?php

function createVisio(){
   if (!isset($_SESSION['visio'])){
      $_SESSION['visio']=array();
      $_SESSION['visio']['title'] = array();
      $_SESSION['visio']['filename'] = array();
      $_SESSION['visio']['picture'] = array();
   }
   return true;
}

function addVisioItem($title,$filename,$picture){

  if ( createVisio() ) {
		$filenameOffset = array_search($filename,  $_SESSION['visio']['filename']);

		  if ( $filenameOffset  === false) {
  			array_push( $_SESSION['visio']['title'],$title);
  			array_push( $_SESSION['visio']['filename'],$filename);
  			array_push( $_SESSION['visio']['picture'],$picture);
        echo getVisioItemThumb( $picture );

      } else {
        echo 'KO';
      }     
    } else {
    	echo 'KO';
    }
}


function removeVisioItem($picture){
   	if ( createVisio() )  {

      $pictureOffset = array_search($picture,  $_SESSION['visio']['picture']);

      if ( $pictureOffset !== false ) {
        unset( $_SESSION['visio']['title'][ $pictureOffset ] );
        unset( $_SESSION['visio']['filename'][ $pictureOffset ] );
        unset( $_SESSION['visio']['picture'][ $pictureOffset ] );
        echo 'OK';
      } else {
        echo 'KO';
      }
     
    } else {
      echo 'KO';
    }
}

function getVisioItemThumb( $id ){
  if ( createVisio() )  {
    $pictureOffset = array_search( $id, $_SESSION['visio']['picture']);
    if ( $pictureOffset !== false ) {
        switch( $_SESSION['visio']['title'][ $pictureOffset ] ) {
          case "Sailing4handicap":
            return "dynamic/event/gallery_".$id.".jpg";
          break;

          case "Modèle 42":
            return "dynamic/boat/boat_".$id.".jpg";
          break; 

          case "Magazine":
            return "dynamic/magazines/miniatureVisio.png";
          break;

          case "Communiqué de presse":
          case "Dossier de presse":
            return "static/img/common/pdf-icon.png";
          break;

          default: 
           return "dynamic/boat/boat_".$id.".jpg";
        }
    }
  }
}

function deleteVisio(){
   unset($_SESSION['visio']);
   echo 'OK';
}
