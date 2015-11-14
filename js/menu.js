function loadpage(onoma,did) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      
    if (did==1){
       document.getElementById("tableresult").innerHTML = xhttp.responseText;
    }
    else if(did==2){
       document.getElementById("tableresult2").innerHTML = xhttp.responseText;
    }
    else if(did==3){
       document.getElementById("tableresult3").innerHTML = xhttp.responseText;
    }
    else if(did==4){
       document.getElementById("tableresult4").innerHTML = xhttp.responseText;
    }
    else if(did==5){
       document.getElementById("tableresult5").innerHTML = xhttp.responseText;
    }
    else if(did==6){
       document.getElementById("tableresult6").innerHTML = xhttp.responseText;
    }
    else if(did==7){
       document.getElementById("tableresult7").innerHTML = xhttp.responseText;
    }
    else{
       document.getElementById("tableresult").innerHTML = xhttp.responseText;
    }

    }
  }
  /*sendString = onoma.substring(1);*/
  xhttp.open("GET", "phpscripts/getsem.php?cid="+onoma+"", true);
  xhttp.send();
}


/*
function loadpage2(codeles) {
$.ajax({
  url: 'phpscripts/getsem.php',
  type: 'GET',
  data: 'cid='+codeles,
  success: function(data) {
	//called when successful
	$('#ajaxphp-results').html(data);
  },
  error: function(e) {
	//called when there is an error
	//console.log(e.message);
  }
});
}
*/
