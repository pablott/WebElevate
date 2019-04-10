<?php
  // Check if there was a result
  if (isset($info)) {
    $out = $info;
  }
  else {
    $out['error'] = 'No such user ID';
  }

  // Encode to JSON and output
  echo json_encode($out);
?>
