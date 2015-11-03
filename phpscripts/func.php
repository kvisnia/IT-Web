<?php
function setactive($name){
  if(isset($_GET['pm']) && !empty($_GET['pm'])){
    if ($_GET['pm']== $name){
      return "active";
    }
    else {
      return "";
    }
  }
  else {
    return "";
  }
}

?>
