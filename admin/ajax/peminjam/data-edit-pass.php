<?php 

	require_once('../../../lib/php/koneksi.php');  

  // $keyword = $_POST['keyword'];

  
  
  ob_start();
  
  include "view-edit-pass.php";
  
  $data = ob_get_contents();
  
  ob_end_clean();
  
  echo json_encode(array('hasil'=>$data));	

?>