<?php
function cleanFormEntries($form) {
  foreach ($form as $key => $value) {
    $form[$key] = htmlspecialchars($value);
  }
  return $form;
}

function checkValue($form){
  foreach ($form as $key => $value) {
    if (empty($value)) {
      return false;
      break;
    }
    else {
      return true;
    }
  }
}

 ?>
