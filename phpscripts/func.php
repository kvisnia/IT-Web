<?php
function setactive($name){
  if(isset($_GET['cid']) && !empty($_GET['cid'])){
    if ($_GET['cid']== $name){
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
