function loadpage(onoma) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     document.getElementById("container").innerHTML = xhttp.responseText;
     $(document).ready(function() {
     $('#vehi-list').DataTable();
 } );
    }
  }
  sendString = onoma.substring(1);
  xhttp.open("GET", "/pages/"+sendString+".php", true);
  xhttp.send();
}
